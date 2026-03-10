<?php

// Http Method

// get = melihat data atau menampilkannya
// post = mengirim data
// put atau patch = merubah atau mengedit data
// delete = menghapus data

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolumeLimasController;
use Illuminate\Support\Facades\Route;



Route::get('navbar', function () {
    return view('inc.navbar');
});

// Tampilan form perhitungan
Route::get('perhitungan', function () {
    return view('perhitungan.index');
})->name('perhitungan.index');

Route::get('luasPermukaanKubus',[PerhitunganController::class, "index"])->name('luasPermukaanKubus.index');

// Tampilan form perhitungan Volume Kubus
Route::get('volumekubus',
[PerhitunganController::class,
        "indexVolKubus" // ini nama functionnya
    ]
)->name('volumekubus.index');

// Tampilan form perhitungan Volume Balok
Route::get('volumetabung',
[PerhitunganController::class,
        "indexVolTabung"
 ])->name('volumetabung.v_tabung');



// Aksi perhitungan
Route::post('perhitungan', [PerhitunganController::class, "store"])->name('perhitungan.store');

Route::post('luasPermukaanKubus', [PerhitunganController::class, "storeLpKubus"])->name('luasPermukaanKubus.store');

// Aksi perhitungan Volume Kubus
Route::post('volumekubus', [PerhitunganController::class, "storeVolKubus"])->name('volumekubus.store');


// get untuk menampilkan
// Route::get('volumelimas', [VolumeLimasController::class, 'index'])->name('volumelimas.index');
// Route::get('volumelimas/create', [VolumeLimasController::class, 'create'])->name('volumelimas.create');
// // post untuk mengirim ke db
// Route::post('volumelimas/store', [VolumeLimasController::class, 'store'])->name('volumelimas.store');
// Route::get('volumelimas/edit/{id}', [VolumeLimasController::class, 'edit'])->name('volumelimas.edit');
// Route::put('volumelimas/update/{id}', [VolumeLimasController::class, 'update'])->name('volumelimas.update');
// Route::delete('volumelimas/delete/{id}', [VolumeLimasController::class, 'destroy'])->name('volumelimas.destroy');

Route::resource('volumelimas', VolumeLimasController::class);


// Tugas PendaftaranPeserta
Route::get('pendaftaranpeserta', [PesertaController::class, 'index'])->name('pendaftaranpeserta.index');
Route::get('pendaftaranpeserta/create', [PesertaController::class, 'create'])->name('pendaftaranpeserta.create');
Route::post('pendaftaranpeserta/store', [PesertaController::class, 'store'])->name('pendaftaranpeserta.store');
Route::get('pendaftaranpeserta/edit/{id}', [PesertaController::class, 'edit'])->name('pendaftaranpeserta.edit');
Route::put('pendaftaranpeserta/update/{id}', [PesertaController::class, 'update'])->name('pendaftaranpeserta.update');
Route::delete('pendaftaranpeserta/destroy/{id}', [PesertaController::class, 'destroy'])->name('pendaftaranpeserta.destroy');


Route::get('belajar-laravel', [BelajarController::class, 'index']);
Route::get('siswa', [BelajarController::class, 'getSiswa']);
Route::get('create', [BelajarController::class, 'create'])->name('siswa.create');
Route::post('store', [BelajarController::class, 'store'])->name('siswa.store');


Route::get('/', [LoginController::class, 'index']);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);