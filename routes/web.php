<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/pinjambuku', function () {
    return view('pinjambuku');
});

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