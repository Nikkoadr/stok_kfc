<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StokOpnameController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('produk', ProdukController::class)->except(['show']);
Route::get('stok-opname', [StokOpnameController::class, 'index'])->name('stok-opname.index');
Route::post('stok-opname', [StokOpnameController::class, 'store'])->name('stok-opname.store');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/pdf/{tanggal}', [LaporanController::class, 'cetakPdf'])->name('laporan.pdf');
