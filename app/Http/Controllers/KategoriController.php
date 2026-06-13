<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('kategori')
            ->leftJoin('buku', 'kategori.id_kategori', '=', 'buku.id_kategori')
            ->select(
                'kategori.id_kategori',
                'kategori.nama_kategori',
                'kategori.deskripsi',
                DB::raw('COUNT(buku.id_buku) as jumlah_buku')
            )
            ->groupBy(
                'kategori.id_kategori',
                'kategori.nama_kategori',
                'kategori.deskripsi'
            );

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('kategori.nama_kategori', 'like', '%' . $request->search . '%')
                  ->orWhere('kategori.deskripsi', 'like', '%' . $request->search . '%');
            });
        }

        $kategori = $query->orderBy('kategori.id_kategori', 'desc')->get();

        return view('kategori', compact('kategori'));
    }

    public function store(Request $request)
    {
        DB::table('kategori')->insert([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        DB::table('kategori')
            ->where('id_kategori', $id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
                'deskripsi' => $request->deskripsi,
                'updated_at' => now()
            ]);

        return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('kategori')
            ->where('id_kategori', $id)
            ->delete();

        return redirect('/kategori')->with('success', 'Kategori berhasil dihapus');
    }
}