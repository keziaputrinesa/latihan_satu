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

Route::get('/login', function () {
    return view('login');
});

Route::get('/kartu_anggota', function () {
    return view('kartu_anggota');
});

Route::get('/kelola-buku', function () {
    return view('kelola-buku');
});

Route::get('/kelola-data-denda', function () {
    return view('kelola-data-denda');
});

Route::get('/selmat_datang', function () {
    return view('selmat_datang');
});

Route::get('/jenis_buku', function () {
    return view('jenis_buku');
});

Route::get('/layout_buku', function () {
    return view('layout_buku');
});

Route::get('/fiksi', function () {
    return view('fiksi');
});

Route::get('/non-fiksi', function () {
    return view('non-fiksi');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/komik', function () {
    return view('komik');
});

Route::get('/tambah_data', function () {
    return view('tambah_data');
});

Route::get('/login_buku', function () {
    return view('login_buku');
});

