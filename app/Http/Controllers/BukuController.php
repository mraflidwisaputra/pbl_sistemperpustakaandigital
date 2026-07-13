<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $buku = Buku::with('kategori')
            ->when($request->search, function ($query) use ($request) {
                $query->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('penulis', 'like', '%' . $request->search . '%')
                    ->orWhere('penerbit', 'like', '%' . $request->search . '%')
                    ->orWhere('isbn', 'like', '%' . $request->search . '%')
                    ->orWhere('tahun_terbit', 'like', '%' . $request->search . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        $kategori = Kategori::orderBy('nama_kategori')->get();

        return view('data-buku', compact('buku', 'kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'nullable|digits:4|integer|min:1900|max:' . date('Y'),
            'penerbit' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:50',
            'kategori_id' => 'nullable|exists:kategori,id',
            'stok' => 'required|integer|min:0',
            'denda_hilang' => 'nullable|integer|min:0',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $coverPath = null;

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
        }

        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'isbn' => $request->isbn,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori_id' => $request->kategori_id,
            'stok' => $request->stok,
            'denda_hilang' => $request->denda_hilang ?? 50000,
            'cover' => $coverPath,
            'rating' => 0,
            'jumlah_ulasan' => 0,
            'status' => $request->stok > 0 ? 'Tersedia' : 'Dipinjam',
            'is_rekomendasi' => 0,
        ]);

        return redirect('/data-buku')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'nullable|digits:4|integer|min:1900|max:' . date('Y'),
            'penerbit' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:50',
            'kategori_id' => 'nullable|exists:kategori,id',
            'stok' => 'required|integer|min:0',
            'denda_hilang' => 'nullable|integer|min:0',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $coverPath = $buku->cover;

        if ($request->hasFile('cover')) {
            if ($buku->cover && Storage::disk('public')->exists($buku->cover)) {
                Storage::disk('public')->delete($buku->cover);
            }

            $coverPath = $request->file('cover')->store('covers', 'public');
        }

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'isbn' => $request->isbn,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori_id' => $request->kategori_id,
            'stok' => $request->stok,
            'denda_hilang' => $request->denda_hilang ?? 50000,
            'cover' => $coverPath,
            'status' => $request->stok > 0 ? 'Tersedia' : 'Dipinjam',
        ]);

        return redirect('/data-buku')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        try {
            $buku = Buku::findOrFail($id);

            if ($buku->cover && Storage::disk('public')->exists($buku->cover)) {
                Storage::disk('public')->delete($buku->cover);
            }

            $buku->delete();

            return redirect('/data-buku')->with('success', 'Data buku berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect('/data-buku')->with('error', 'Data buku gagal dihapus. Buku mungkin masih terhubung dengan data peminjaman.');
        }
    }
}