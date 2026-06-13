<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarBukuController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('buku')
            ->leftJoin('kategori', 'buku.id_kategori', '=', 'kategori.id_kategori')
            ->select(
                'buku.*',
                'kategori.nama_kategori'
            );

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('buku.judul_buku', 'like', '%' . $request->search . '%')
                  ->orWhere('buku.penulis', 'like', '%' . $request->search . '%')
                  ->orWhere('kategori.nama_kategori', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->kategori) {
            $query->where('kategori.nama_kategori', $request->kategori);
        }

        $buku = $query->orderBy('buku.id_buku', 'desc')->get();

        $kategori = DB::table('kategori')
            ->orderBy('nama_kategori', 'asc')
            ->get();

        return view('daftarbuku', compact('buku', 'kategori'));
    }
}