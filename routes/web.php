<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\RiwayatPeminjamanController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/anggota/dashboard', function () {
    return view('anggota.dashboard');
})->name('anggota.dashboard');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/daftarbuku', [DaftarBukuController::class, 'index'])
    ->name('daftar.buku');

Route::post('/daftarbuku/pinjam', [DaftarBukuController::class, 'pinjam'])
    ->name('daftar.buku.pinjam');

Route::post('/riwayat-peminjaman/{id}/kembalikan', [RiwayatPeminjamanController::class, 'kembalikan'])   
    ->name('riwayat.kembalikan');

Route::get('/riwayat-peminjaman', [RiwayatPeminjamanController::class, 'index'])
    ->name('riwayat.peminjaman');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

<<<<<<< HEAD
Route::get('/login', function () {
    return view('login');
});

<<<<<<< HEAD
Route::get('/kelola data', function () {
    return view('keloladata');
});

Route::get('/keloladenda', function () {
    return view('keloladenda');
=======
Route::get('/Daftarbuku', function () {
    return view('Daftarbuku');
});

Route::get('/Register', function () {
    return view('Register');
>>>>>>> 0c2aad9ee736e6a62656310fa4c7dda385fe3220
});
=======
>>>>>>> 149f664 (update kode)
