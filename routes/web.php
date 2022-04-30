<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/dataPeminjam', function () {
    return view('dataPeminjam');
});

Route::get('/jumlahPinjaman', function () {
    return view('jumlahPinjaman');
});

Route::get('/tenorBulanan', function () {
    return view('tenorBulanan');
});

Route::get('/tenorHarian', function () {
    return view('tenorHarian');
});

Route::get('/rincianTagihanBulanan', function () {
    return view('rincianTagihanBulanan');
});

Route::get('/rincianTagihanHarian', function () {
    return view('rincianTagihanHarian');
});

Route::get('/pembayaran_1', function () {
    return view('pembayaran_1');
});

Route::get('peminjam', [\App\Http\Controllers\PeminjamController::class,'create'])->name('peminjam.create');
Route::post('peminjam', [\App\Http\Controllers\PeminjamController::class,'store'])->name('peminjam.store');

Route::get('pinjam/bulan', [\App\Http\Controllers\PinjamBulanController::class,'create'])->name('pinjambulan.create');
Route::post('pinjam/bulan', [\App\Http\Controllers\PinjamBulanController::class,'store'])->name('pinjambulan.store');

Route::get('pinjam/hari', [\App\Http\Controllers\PinjamHariController::class,'create'])->name('pinjamhari.create');
Route::post('pinjam/hari', [\App\Http\Controllers\PinjamHariController::class,'store'])->name('pinjamhari.store');
