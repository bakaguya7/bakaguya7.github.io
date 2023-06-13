<?php

use Illuminate\Support\Facades\Route;

//############################################################
// Route HOME
Route::get('/', function () {
    return view('home.home', [
        "title" => "HOME"
    ]);
});


//############################################################
// Route Dashboard
Route::get('/dashboard', function () {
    return view('home.dashboard', [
        "title" => "Dashboard"
    ]);
});


//############################################################
// Route DATA GURU
// ----------------------------------------------------
// Data Guru
Route::get('/data-guru', function () {
    return view('dataguru.data-guru', [
        "title" => "Data Guru"
    ]);
});

// ----------------------------------------------------
// Jadwal Guru
Route::get('/jadwal', function () {
    return view('dataguru.jadwal', [
        "title" => "Jadwal"
    ]);
});

// ----------------------------------------------------
// Data Riwayat dan Gaji
Route::get('/riwayat-gaji', function () {
    return view('dataguru.riwayat-gaji', [
        "title" => "Riwayat & Gaji"
    ]);
});

// ----------------------------------------------------
// Data Mapel
Route::get('/mapel', function () {
    return view('dataguru.mapel', [
        "title" => "Data Mapel"
    ]);
});


//############################################################
// Route DATA SISWA
// ----------------------------------------------------
// Data siswa
Route::get('/data-siswa', function () {
    return view('datasiswa.data-siswa', [
        "title" => "Data Siswa"
    ]);
});

// ----------------------------------------------------
// Data wali siswa
Route::get('/wali-siswa', function () {
    return view('datasiswa.wali-siswa', [
        "title" => "Data Wali Siswa"
    ]);
});

// ----------------------------------------------------
// Data Pembayaran
Route::get('/pembayaran', function () {
    return view('datasiswa.pembayaran', [
        "title" => "Pembayaran"
    ]);
});

// ----------------------------------------------------
// Data Kelas
Route::get('/data-kelas', function () {
    return view('datasiswa.data-kelas', [
        "title" => "Data Kelas"
    ]);
});


//############################################################
// Route PROGRAM SEKOLAH
// ----------------------------------------------------
// Pembangunan
Route::get('/pembangunan', function () {
    return view('program.pembangunan', [
        "title" => "Pembangunan"
    ]);
});

// ----------------------------------------------------
// Program Praktikum
Route::get('/program-praktikum', function () {
    return view('program.program-praktikum', [
        "title" => "Program Praktikum"
    ]);
});

// ----------------------------------------------------
// Program Lomba
Route::get('/program-lomba', function () {
    return view('program.program-lomba', [
        "title" => "Program Lomba"
    ]);
});

// ----------------------------------------------------
// Kunjungan Industri
Route::get('/kunjungan-industri', function () {
    return view('program.kunjungan-industri', [
        "title" => "Kunjungan Industri "
    ]);
});

// ----------------------------------------------------
// Program Ekskul
Route::get('/program-ekskul', function () {
    return view('program.program-ekskul', [
        "title" => "Program Ekskul"
    ]);
});

// ----------------------------------------------------
// Program Kerja Sama
Route::get('/kerja-sama', function () {
    return view('program.kerja-sama', [
        "title" => "Kerja Sama"
    ]);
});

// ----------------------------------------------------
// Program Magang
Route::get('/program-magang', function () {
    return view('program.program-magang', [
        "title" => "Program Magang"
    ]);
});


//############################################################
// Route Profil Sekolah
Route::get('/profile', function () {
    return view('profil.profile', [
        "title" => "Profil Sekolah"
    ]);
});

//############################################################
// Route Login
// Login Guru
Route::get('/login-guru', function () {
    return view('login.login-guru', [
        "title" => "Login"
    ]);
});

// Login siswa
Route::get('/login-siswa', function () {
    return view('login.login-siswa', [
        "title" => "Login"
    ]);
});





