<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBuku = DB::table('buku')->count();
        $totalAnggota = DB::table('anggota')->count();
        $totalPeminjaman = DB::table('peminjaman')->count();
        $peminjamanAktif = DB::table('peminjaman')
            ->where('status', 'Dipinjam')
            ->count();

        $aktivitas = DB::table('aktivitas_beranda')
            ->leftJoin('anggota', 'aktivitas_beranda.id_anggota', '=', 'anggota.id_anggota')
            ->leftJoin('buku', 'aktivitas_beranda.id_buku', '=', 'buku.id_buku')
            ->select(
                'aktivitas_beranda.*',
                'anggota.nama_anggota',
                'buku.judul_buku'
            )
            ->orderBy('tanggal_aktivitas', 'desc')
            ->get();

        return view('dashboard', compact(
            'totalBuku',
            'totalAnggota',
            'totalPeminjaman',
            'peminjamanAktif',
            'aktivitas'
        ));
    }
}