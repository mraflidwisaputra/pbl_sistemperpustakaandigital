<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('kategori')
            ->leftJoin('buku', 'kategori.id', '=', 'buku.kategori_id')
            ->select(
                'kategori.id',
                'kategori.nama_kategori',
                DB::raw('COUNT(buku.id) as jumlah_buku')
            )
            ->groupBy('kategori.id', 'kategori.nama_kategori');

        if ($request->search) {
            $query->where('kategori.nama_kategori', 'like', '%' . $request->search . '%');
        }

        $kategori = $query->orderBy('kategori.id', 'desc')->get();

        return view('kategori', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
        ]);

        DB::table('kategori')->insert([
            'nama_kategori' => $request->nama_kategori,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
        ]);

        DB::table('kategori')
            ->where('id', $id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
                'updated_at' => now(),
            ]);

        return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jumlahBuku = DB::table('buku')
            ->where('kategori_id', $id)
            ->count();

        if ($jumlahBuku > 0) {
            return redirect('/kategori')->with('error', 'Kategori tidak bisa dihapus karena masih digunakan oleh buku.');
        }

        DB::table('kategori')
            ->where('id', $id)
            ->delete();

        return redirect('/kategori')->with('success', 'Kategori berhasil dihapus');
    }
}