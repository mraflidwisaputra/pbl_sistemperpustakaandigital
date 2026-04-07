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

Route::get('/Daftarbuku', function () {
    return view('Daftarbuku');
});

Route::get('/Register', function () {
    return view('Register');
});