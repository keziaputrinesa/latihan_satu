<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layout-utama');
});

//contoh halaman
Route::get('/dashboard', function () {
    return view('dashbord');
});

Route::get('/data_siswa', function () {
    return view('');
});

Route::get('/peminjaman', function () {
    return view('');
});

Route::get('/laporan', function () {
    return view('');
});

//DATA-BUKU

Route::get('/kelola-data', function () {
    return view('kelola-data');
});

//master-data
Route::get('/isi-data', function () {
    return view('isi-data');
});
//data-anggota
Route::get('/kelola-anggota', function () {
    return view('kelola-anggota');
});
//master-anggota
Route::get('/isi-anggota', function () {
    return view('isi-anggota');
});

Route::get('/data-buku', function () {
    return view('data-buku');
});

Route::get('/login.', function () {
    return view('login');
});

Route::get('/kartu-anggota', function () {
    return view('kartu-anggota');
});

Route::get('/kelola-buku', function () {
    return view('kelola-buku');
});

Route::get('/kelola-data-denda', function () {
    return view('kelola-data-denda');
});