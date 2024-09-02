<?php

use Illuminate\Support\Facades\Route;
Route::get('/index', function () {
    return view('index');
});


Route::get('/', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});

// route untuk admin
Route::get('/admin', function () {
    return view('admin/adminIndex');
});

// route untuk siswa
Route::get('/siswa', function () {
    return view('siswa/siswaIndex');
});
Route::get('/siswa/data-siswa', function () {
    return view('siswa/dataSiswa');
});
