<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $buku = Buku::with('kategori')
            ->cari($request->search)
            ->orderBy('id_buku', 'desc')
            ->paginate(10)
            ->withQueryString();

        $kategori = Kategori::orderBy('nama_kategori')->get();

        return view('data-buku', compact('buku', 'kategori'));
    }

    public function daftarBuku(Request $request)
    {
        $buku = Buku::with('kategori')
            ->cari($request->search)
            ->kategoriFilter($request->kategori)
            ->orderBy('id_buku', 'desc')
            ->paginate(12)
            ->withQueryString();

        $kategori = Kategori::orderBy('nama_kategori')->get();

        return view('daftarbuku', compact('buku', 'kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_rilis' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'penerbit' => 'required|string|max:255',
            'isbn' => 'required|string|max:50|unique:buku,isbn',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'stok' => 'required|integer|min:0',
            'cover' => 'required|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $coverPath = $request->file('cover')->store('covers', 'public');

        Buku::create([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'tahun_rilis' => $request->tahun_rilis,
            'penerbit' => $request->penerbit,
            'isbn' => $request->isbn,
            'id_kategori' => $request->id_kategori,
            'stok' => $request->stok,
            'cover' => $coverPath,
        ]);

        return redirect('/data-buku')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_rilis' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'penerbit' => 'required|string|max:255',
            'isbn' => 'required|string|max:50|unique:buku,isbn,' . $id . ',id_buku',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'stok' => 'required|integer|min:0',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $buku = Buku::findOrFail($id);
        $coverPath = $buku->cover;

        if ($request->hasFile('cover')) {
            if ($buku->cover && Storage::disk('public')->exists($buku->cover)) {
                Storage::disk('public')->delete($buku->cover);
            }

            $coverPath = $request->file('cover')->store('covers', 'public');
        }

        $buku->update([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'tahun_rilis' => $request->tahun_rilis,
            'penerbit' => $request->penerbit,
            'isbn' => $request->isbn,
            'id_kategori' => $request->id_kategori,
            'stok' => $request->stok,
            'cover' => $coverPath,
        ]);

        return redirect('/data-buku')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        if ($buku->cover && Storage::disk('public')->exists($buku->cover)) {
            Storage::disk('public')->delete($buku->cover);
        }

        $buku->delete();

        return redirect('/data-buku')->with('success', 'Buku berhasil dihapus.');
    }

    public function pinjamBuku(Request $request)
    {
        $request->validate([
            'id_buku' => 'required|exists:buku,id_buku',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ]);

        $buku = Buku::findOrFail($request->id_buku);

        if ($buku->stok <= 0) {
            return redirect('/daftar-buku')->with('error', 'Stok buku tidak tersedia.');
        }

        $idAnggota = session('id_anggota') ?? auth()->id();

        if (!$idAnggota) {
            return redirect('/daftar-buku')->with('error', 'Silakan login sebagai anggota terlebih dahulu.');
        }

        DB::transaction(function () use ($request, $buku, $idAnggota) {
            $buku->decrement('stok');

            DB::table('peminjaman')->insert([
                'id_anggota' => $idAnggota,
                'id_buku' => $buku->id_buku,
                'code_booking' => 'PB-' . strtoupper(Str::random(8)),
                'tanggal_pinjam' => $request->tanggal_pinjam,
                'tanggal_kembali' => $request->tanggal_kembali,
                'status' => 'Menunggu Konfirmasi',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        return redirect('/daftar-buku')->with('success', 'Peminjaman berhasil diajukan.');
    }
}