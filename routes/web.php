<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // <- TAMBAHAN: Wajib ada karena dipakai di route /dashboard

Route::get('/dashboard', function () {
    $totalAnggota = DB::table('anggota')->count();
    $totalBuku = DB::table('buku')->count();
    $totalPeminjaman = DB::table('peminjaman')->count();
    
    $peminjamanAktif = DB::table('peminjaman')
        ->where('status', 'dipinjam') // Pastikan statusnya sesuai dengan yang ada di database Anda (misal: 'Dipinjam' atau 'dipinjam')
        ->count();
        
    $aktivitas = DB::table('peminjaman')
        ->leftJoin('anggota', 'peminjaman.id_anggota', '=', 'anggota.id') // <- PERBAIKAN: 'id_anggota' lebih umum daripada 'anggota_id'
        ->select(
            'peminjaman.tanggal_pinjam as tanggal_aktivitas',
            'anggota.nama as nama_anggota',
            DB::raw("'Peminjaman Buku' as jenis_aktivitas"),
            'peminjaman.status as keterangan'
        )
        ->latest('peminjaman.tanggal_pinjam')
        ->limit(5)
        ->get();
        
    return view('dashboard', compact(
        'totalAnggota',
        'totalBuku',
        'totalPeminjaman',
        'peminjamanAktif',
        'aktivitas'
    ));
})->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/lupapassword', function () {
    return view('lupapassword');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// --- ROUTE DAFTAR BUKU (ANGGOTA) ---
Route::get('/daftar-buku', [BukuController::class, 'daftarBuku'])->name('daftar.buku');

// PERBAIKAN NAMA ROUTE: Diubah menjadi 'buku.pinjam' agar cocok dengan Blade sebelumnya
Route::post('/daftar-buku/pinjam', [BukuController::class, 'pinjamBuku'])->name('buku.pinjam');

Route::get('/riwayat-peminjaman', function () {
    return view('riwayat-peminjaman');
})->name('riwayat.peminjaman');

// --- ROUTE KELOLA DATA BUKU (ADMIN) ---
Route::get('/data-buku', [BukuController::class, 'index'])->name('data.buku');
Route::post('/data-buku/store', [BukuController::class, 'store'])->name('data.buku.store');
Route::put('/data-buku/update/{id}', [BukuController::class, 'update'])->name('data.buku.update');
Route::delete('/data-buku/delete/{id}', [BukuController::class, 'destroy'])->name('data.buku.delete');

// --- ROUTE KELOLA ANGGOTA (ADMIN) ---
Route::get('/keloladata', [AnggotaController::class, 'index'])->name('anggota.index');
Route::post('/keloladata/store', [AnggotaController::class, 'store'])->name('anggota.store');
Route::put('/keloladata/update/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::delete('/keloladata/delete/{id}', [AnggotaController::class, 'destroy'])->name('anggota.delete');

// --- ROUTE PEMINJAMAN & LAPORAN (ADMIN) ---
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::put('/peminjaman/konfirmasi/{id}', [PeminjamanController::class, 'konfirmasi'])->name('peminjaman.konfirmasi');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

// --- ROUTE KATEGORI (ADMIN) ---
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');