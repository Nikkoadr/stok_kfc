<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HitungController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/daftar_barang', [BarangController::class, 'index'])->name('daftar_barang');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/form_edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/form_update/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('/hitung', [HitungController::class, 'create'])->name('hitung.create');
Route::post('/hitung', [HitungController::class, 'store'])->name('hitung.store');
Route::get('/laporan', [HitungController::class, 'laporan'])->name('laporan');
