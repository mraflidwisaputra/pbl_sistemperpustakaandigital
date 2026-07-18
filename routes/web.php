<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KelolaDataController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\RiwayatPeminjamanController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\NotifikasiController;

Route::view('/', 'landingpage')->name('landingpage');
Route::view('/landingpage', 'landingpage');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');

Route::post('/profil/update-password', [ProfilController::class, 'updatePassword'])
    ->name('profil.updatePassword');

Route::post('/notifikasi/{notifikasi}/baca', [NotifikasiController::class, 'baca'])
    ->name('notifikasi.baca');

Route::get('/daftarbuku', [DaftarBukuController::class, 'index'])
    ->name('daftar.buku');

Route::post('/daftarbuku/pinjam', [DaftarBukuController::class, 'pinjam'])
    ->name('daftar.buku.pinjam');

Route::post('/riwayat-peminjaman/{id}/kembalikan', [RiwayatPeminjamanController::class, 'kembalikan'])   
    ->name('riwayat.kembalikan');

Route::get('/riwayat-peminjaman', [RiwayatPeminjamanController::class, 'index'])
    ->name('riwayat.peminjaman');

Route::put('/riwayat-peminjaman/{id}/hilang', [RiwayatPeminjamanController::class, 'laporkanHilang'])
    ->name('riwayat.hilang');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

// --- ROUTE KELOLA DATA BUKU (ADMIN) ---
Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku.index');
Route::post('/data-buku/store', [BukuController::class, 'store'])->name('data-buku.store');
Route::put('/data-buku/update/{id}', [BukuController::class, 'update'])->name('data-buku.update');
Route::delete('/data-buku/delete/{id}', [BukuController::class, 'destroy'])->name('data-buku.destroy');

// --- ROUTE KELOLA ANGGOTA (ADMIN) ---
Route::get('/keloladata', [KelolaDataController::class, 'index'])->name('keloladata.index');
Route::post('/keloladata/store', [KelolaDataController::class, 'store'])->name('keloladata.store');
Route::put('/keloladata/update/{id}', [KelolaDataController::class, 'update'])->name('keloladata.update');
Route::delete('/keloladata/delete/{id}', [KelolaDataController::class, 'destroy'])->name('keloladata.destroy');
Route::put('/keloladata/{id}/reset-password', [KelolaDataController::class, 'resetPassword'])
    ->name('keloladata.resetPassword');

// --- ROUTE PEMINJAMAN & LAPORAN (ADMIN) ---
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::put('/peminjaman/konfirmasi/{id}', [PeminjamanController::class, 'konfirmasi'])->name('peminjaman.konfirmasi');

// ROUTE BARU UNTUK PENGEMBALIAN BUKU
Route::put('/peminjaman/{id}/kembali', [PeminjamanController::class, 'pengembalian'])->name('peminjaman.kembali');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

// --- ROUTE KATEGORI (ADMIN) ---
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
