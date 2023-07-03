<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterSiswaController;
use App\Http\Controllers\RegisterGuruController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\ProgramSekolahController;
use App\Http\Controllers\TagihanSiswaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MateriController;
use App\Models\Materi;
use App\Models\Profil;

// new route admin
Route::get('/admin', function () {
    return view('admin.dashboard', [
        "title" => "Dashboard Admin"
    ]);
});

// Register Siswa

Route::resource('/register-siswa', RegisterSiswaController::class);

Route::get('/register-siswa-create', function () {
    return view('admin.register-siswa.create', [
        "title" => "Create Register Siswa"
    ]);
});

Route::post('/register-siswa-store', [RegisterSiswaController::class, 'store']);

// Register Guru

Route::resource('/register-guru', RegisterGuruController::class);

Route::get('/register-guru-create', function () {
    return view('admin.register-guru.create', [
        "title" => "Create Register Guru"
    ]);
});

Route::post('/register-guru-store', [RegisterGuruController::class, 'store']);

// data-siswa
Route::resource('/data-siswa', DataSiswaController::class);

Route::get('/data-siswa-create', function () {
    return view('admin.data-siswa.create', [
        "title" => "Create Data Siswa"
    ]);
});

Route::post('/data-siswa-store', [DataSiswaController::class, 'store']);


// Program Sekolah
Route::resource('/program-sekolah', ProgramSekolahController::class);

Route::get('/program-sekolah-create', function () {
    return view('admin.program-sekolah.create', [
        "title" => "Create Program Sekolah"
    ]);
});

Route::post('/program-sekolah-store', [ProgramSekolahController::class, 'store']);

// Data Guru
Route::resource('/data-guru', DataGuruController::class);

Route::get('/data-guru-create', function () {
    return view('admin.data-guru.create', [
        "title" => "Create Data Guru"
    ]);
});

Route::post('/data-guru-store', [DataGuruController::class, 'store']);

// tagihan-siswa
Route::resource('/tagihan-siswa', TagihanSiswaController::class);

Route::get('/tagihan-siswa-create', function () {
    return view('admin.tagihan-siswa.create', [
        "title" => "Create Tagihan Siswa"
    ]);
});

Route::post('/tagihan-siswa-store', [TagihanSiswaController::class, 'store']);



Route::get('/login-guru', [RegisterGuruController::class, 'login'])->name('login');
Route::post('/login-guru', [RegisterGuruController::class, 'loginPost'])->name('login');

// Route::get('/register-siswa-edit', function(){
//     return view('admin.register-siswa.edit', [
//         "title" => "Edit Register Siswa"
//     ]);
// });

// Route::post('/register-siswa-edit', [RegisterSiswaController::class, 'edit']);



// Route::get('/create', function(){
//     return view('admin.register-siswa.create-siswa',[
//         "title" => "Register Siswa"
//     ]);
// });
// Route::group(['middleware' => 'web'], function () {
//     //
// });

// Route::get('/token', function (Request $request) {
//     $token = $request->session()->token();

//     $token = csrf_token();

//     // ...
// });

//#################################################################
//DASHBOARD GURU
//
Route::get('/guru', function () {
    return view('guru.dashboard', [
        "title" => "Dashboard Guru"
    ]);
});

// Profil /////////////////////////////////////
Route::resource('/profil', ProfilController::class);

Route::get('/profil-create', function () {
    return view('guru.profil.create', [
        "title" => "Create Profil Guru"
    ]);
});

Route::get('/profil', function () {
    return view('guru.profil.list', [
        "title" => "Profil"
    ]);
});

Route::post('/profil-store', [ProfilController::class, 'store']);


// Data Materi ///////////////////////////////////////
Route::resource('/materi', ProfilController::class);

Route::get('/materi-create', function () {
    return view('guru.materi.create', [
        "title" => "Create Materi Guru"
    ]);
});

Route::get('/materi', function () {
    return view('guru.materi.list', [
        "title" => "Materi"
    ]);
});

Route::post('/materi-store', [MateriController::class, 'store']);


// Jadwal Mengajar //////////////////////////////////////
Route::resource('/profil', ProfilController::class);

Route::get('/profil-create', function () {
    return view('guru.profil.create', [
        "title" => "Create Profil Guru"
    ]);
});

Route::get('/jadwal', function () {
    return view('guru.jadwal.list', [
        "title" => "Jadwal"
    ]);
});

Route::post('/profil-store', [ProfilController::class, 'store']);


// Data Presensi /////////////////////////////////////
Route::resource('/profil', ProfilController::class);

Route::get('/profil-create', function () {
    return view('guru.profil.create', [
        "title" => "Create Profil Guru"
    ]);
});

Route::get('/presensi', function () {
    return view('guru.presensi.list', [
        "title" => "Presensi"
    ]);
});

Route::post('/profil-store', [ProfilController::class, 'store']);


// Riwayat & Gaji ///////////////////////////////////
Route::resource('/profil', ProfilController::class);

Route::get('/profil-create', function () {
    return view('guru.profil.create', [
        "title" => "Create Profil Guru"
    ]);
});

Route::get('/riwayat-gaji', function () {
    return view('guru.gaji.list', [
        "title" => "Riwayat & Gaji"
    ]);
});

Route::post('/profil-store', [ProfilController::class, 'store']);





//###############################################################
//DASHBOARD SISWA
//
Route::get('/siswa', function () {
    return view('siswa.dashboard', [
        "title" => "Dashboard Siswa"
    ]);
});

// Route Dashboard siswa
Route::get('/dashboard', function () {
    return view('siswa.dashboard', [
        "title" => "Dashboard Siswa"
    ]);
});



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
        "title" => "Dashboard Admin"
    ]);
});

// // Route Dashboard Guru
Route::get('/dashboard-guru', function () {
    return view('home.dashboard-guru', [
        "title" => "Dashboard Guru"
    ]);
});

// // Route Dashboard siswa
Route::get('/dashboard-siswa', function () {
    return view('home.dashboard-siswa', [
        "title" => "Dashboard Siswa"
    ]);
});


// //############################################################
// // Route DATA GURU
// // ----------------------------------------------------
// // Data Guru
// Route::get('/data-guru', function () {
//     return view('dataguru.data-guru', [
//         "title" => "Data Guru",
//     ]);
// });

// // ----------------------------------------------------
// // Jadwal Guru
// Route::get('/jadwal', function () {
//     return view('dataguru.jadwal', [
//         "title" => "Jadwal"
//     ]);
// });

// // ----------------------------------------------------
// // Data Riwayat dan Gaji
// Route::get('/riwayat-gaji', function () {
//     return view('dataguru.riwayat-gaji', [
//         "title" => "Riwayat & Gaji"
//     ]);
// });

// // ----------------------------------------------------
// // Data Mapel
// Route::get('/mapel', function () {
//     return view('dataguru.mapel', [
//         "title" => "Data Mapel"
//     ]);
// });


//############################################################
// Route DATA SISWA
// ----------------------------------------------------
// Data siswa
// Route::get('/data-siswa', function () {
//     return view('datasiswa.data-siswa', [
//         "title" => "Data Siswa"
//     ]);
// });

// // ----------------------------------------------------
// // Data wali siswa
// Route::get('/wali-siswa', function () {
//     return view('datasiswa.wali-siswa', [
//         "title" => "Data Wali Siswa"
//     ]);
// });

// // ----------------------------------------------------
// // Data Pembayaran
// Route::get('/pembayaran', function () {
//     return view('datasiswa.pembayaran', [
//         "title" => "Pembayaran"
//     ]);
// });

// // ----------------------------------------------------
// // Data Kelas
// Route::get('/data-kelas', function () {
//     return view('datasiswa.data-kelas', [
//         "title" => "Data Kelas"
//     ]);
// });

// // ----------------------------------------------------
// // Data Materi
// Route::get('/materi', function () {
//     return view('datasiswa.materi', [
//         "title" => "Materi"
//     ]);
// });

// // ----------------------------------------------------
// // Data Nilai
// Route::get('/nilai', function () {
//     return view('datasiswa.nilai', [
//         "title" => "Nilai"
//     ]);
// });


// //############################################################
// // Route PROGRAM SEKOLAH
// // ----------------------------------------------------
// // Pembangunan
// Route::get('/pengembangan', function () {
//     return view('program.pengembangan', [
//         "title" => "Pengembangan"
//     ]);
// });

// // ----------------------------------------------------
// // Program Praktikum
// Route::get('/program-praktikum', function () {
//     return view('program.program-praktikum', [
//         "title" => "Program Praktikum"
//     ]);
// });

// // ----------------------------------------------------
// // Program Lomba
// Route::get('/program-lomba', function () {
//     return view('program.program-lomba', [
//         "title" => "Program Lomba"
//     ]);
// });

// // ----------------------------------------------------
// // Kunjungan Industri
// Route::get('/kunjungan-industri', function () {
//     return view('program.kunjungan-industri', [
//         "title" => "Kunjungan Industri"
//     ]);
// });

// // ----------------------------------------------------
// // Program Ekskul
// Route::get('/program-ekskul', function () {
//     return view('program.program-ekskul', [
//         "title" => "Program Ekskul"
//     ]);
// });

// // ----------------------------------------------------
// // Program Kerja Sama
// Route::get('/kerja-sama', function () {
//     return view('program.kerja-sama', [
//         "title" => "Kerja Sama"
//     ]);
// });

// // ----------------------------------------------------
// // Program Magang
// Route::get('/program-magang', function () {
//     return view('program.program-magang', [
//         "title" => "Program Magang"
//     ]);
// });


// //############################################################
// // Route Profil Sekolah
// Route::get('/profile', function () {
//     return view('profil.profile', [
//         "title" => "Profil Sekolah"
//     ]);
// });

// //############################################################
// // Route Login
// // Login Guru
// Route::get('/login-guru', function () {
//     return view('login.login-guru', [
//         "title" => "Login"
//     ]);
// });

// // Login siswa
// Route::get('/loginsiswa', function () {
//     return view('login.loginsiswa', [
//         "title" => "Login"
//     ]);
// });

// // 
// Route::get('/landing-siswa', function () {
//     return view('layout.landing-siswa', [
//         "title" => "Landing Siswa"
//     ]);
// });

// Route::get('/data-pembayaran', function () {
//     return view('supervisor.data-pembayaran', [
//         "title" => "Data Pembayaran Siswa"
//     ]);
// });

// Route::get('/hak-akses', function () {
//     return view('supervisor.hak-akses', [
//         "title" => "Hak Akses"
//     ]);
// });

// Route::get('/create-siswa-account', function () {
//     return view('supervisor.create-siswa-account', [
//         "title" => "Create Siswa Acccount"
//     ]);
// });

// Route::get('/buat-data-guru', function () {
//     return view('dataguru.create-data-guru', [
//         "title" => "Buat Data Guru"
//     ]);
// });

// Route::get('/blog-pembangunan', function () {
//     return view('programsekolah.pembangunan', [
//         "title" => "Pembangunan"
//     ]);
// });

// Route::get('/buat-data-siswa', function () {
//     return view('datasiswa.create-data-siswa', [
//         "title" => "Buat Data Siswa"
//     ]);
// });

// Route::get('/data-wali-siswa', function () {
//     return view('datasiswa.wali-siswa', [
//         "title" => "Data Wali Siswa"
//     ]);
// });

// Route::get('/buat-data-walisiswa', function () {
//     return view('datasiswa.create-data-wali', [
//         "title" => "Buat Data Wali Siswa"
//     ]);
// });





// // Route::get('/login/example', function () {
// //     return view('login.example', [
// //         "title" => "Cuontoh"
// //     ]);
// // });

// Route::get('/login', [SessionController::class, 'index']);
// // Route::post('/login/siswa', [SessionController::class, 'login']);
// Route::post('/login/siswa', [SessionController::class, 'login']);
