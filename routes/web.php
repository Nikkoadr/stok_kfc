<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/daftar_barang', [BarangController::class, 'index'])->name('daftar_barang');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::post('/barang/form_edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::post('/barang/destroy', [BarangController::class, 'destroy'])->name('barang.destroy');
