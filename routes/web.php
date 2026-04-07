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

Route::get('/kelola data', function () {
    return view('keloladata');
});

Route::get('/keloladenda', function () {
    return view('keloladenda');
});