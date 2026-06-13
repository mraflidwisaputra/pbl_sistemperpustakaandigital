<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Notifikasi;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::latest()->get();

        $kategoriPopuler = Buku::with('kategori')
            ->latest()
            ->take(8)
            ->get();

        $rekomendasi = Buku::with('kategori')
            ->where('is_rekomendasi', 1)
            ->latest()
            ->take(8)
            ->get();

        $bukuTerbaru = Buku::with('kategori')
            ->latest()
            ->take(6)
            ->get();

        $notifikasis = Notifikasi::latest()
            ->take(5)
            ->get();

        $jumlahNotifikasi = Notifikasi::where('status', 'belum_dibaca')->count();

        return view('home', compact(
            'kategori',
            'kategoriPopuler',
            'rekomendasi',
            'bukuTerbaru',
            'notifikasis',
            'jumlahNotifikasi'
        ));
    }
}