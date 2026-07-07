<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
            ->where('id', session('user_id'))
            ->first();

        $kategori = Kategori::latest()->get();

        $hitungPeminjaman = [
            'peminjaman as total_dipinjam' => function ($query) {
                $query->whereIn('status', [
                    'dipinjam',
                    'selesai',
                    'terlambat',
                    'buku hilang',
                ]);
            }
        ];

        // Kategori Populer: rating tertinggi + paling banyak dipinjam
        $kategoriPopuler = Buku::with('kategori')
            ->withCount($hitungPeminjaman)
            ->orderByDesc('total_dipinjam')
            ->latest()
            ->take(8)
            ->get();

        // Rekomendasi Untuk Anda: buku acak
        $rekomendasi = Buku::with('kategori')
            ->withCount($hitungPeminjaman)
            ->inRandomOrder()
            ->take(8)
            ->get();

        // Buku Terbaru: berdasarkan buku baru ditambahkan admin
        $bukuTerbaru = Buku::with('kategori')
            ->withCount($hitungPeminjaman)
            ->latest()
            ->take(6)
            ->get();

        $notifikasis = Notifikasi::where(function ($query) use ($user) {
                $query->where('user_id', $user->id ?? null)
                      ->orWhereNull('user_id');
            })
            ->latest()
            ->take(5)
            ->get();

        $jumlahNotifikasi = Notifikasi::where(function ($query) use ($user) {
                $query->where('user_id', $user->id ?? null)
                      ->orWhereNull('user_id');
            })
            ->where('status', 'belum_dibaca')
            ->count();

        return view('home', compact(
            'user',
            'kategori',
            'kategoriPopuler',
            'rekomendasi',
            'bukuTerbaru',
            'notifikasis',
            'jumlahNotifikasi'
        ));
    }
}