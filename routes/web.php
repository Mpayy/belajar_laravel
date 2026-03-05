<?php

// Http Method

// get = melihat data atau menampilkannya
// post = mengirim data
// put atau patch = merubah atau mengedit data
// delete = menghapus data

use App\Http\Controllers\PerhitunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
 ])->name('volumekubus.index');

// Tampilan form perhitungan Volume Balok
Route::get('volumetabung',
[PerhitunganController::class,
 "v_tabung"
 ])->name('volumetabung.v_tabung');



// Aksi perhitungan
Route::post('perhitungan', [PerhitunganController::class, "store"])->name('perhitungan.store');

Route::post('luasPermukaanKubus', [PerhitunganController::class, "storeLpKubus"])->name('luasPermukaanKubus.store');

// Aksi perhitungan Volume Kubus
Route::post('volumekubus', [PerhitunganController::class, "storeVolKubus"])->name('volumekubus.store');