<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
            ->where('id', session('user_id'))
            ->first();

        $totalBuku = DB::table('buku')->count();

        $totalAnggota = DB::table('users')
            ->where('role', 'anggota')
            ->count();

        $totalPeminjaman = DB::table('peminjaman')->count();

        $peminjamanAktif = DB::table('peminjaman')
            ->whereIn('status', ['dipinjam', 'Dipinjam'])
            ->count();

        $aktivitasTerbaru = DB::table('peminjaman')
            ->leftJoin('users', 'peminjaman.user_id', '=', 'users.id')
            ->leftJoin('buku', 'peminjaman.buku_id', '=', 'buku.id')
            ->select(
                'peminjaman.created_at as tanggal',
                'users.name as nama_anggota',
                'peminjaman.status as aktivitas',
                'buku.judul as keterangan'
            )
            ->orderBy('peminjaman.created_at', 'desc')
            ->limit(10)
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

        return view('dashboard', compact(
            'user',
            'totalBuku',
            'totalAnggota',
            'totalPeminjaman',
            'peminjamanAktif',
            'aktivitasTerbaru',
            'notifikasis',
            'jumlahNotifikasi'
        ));
    }
}