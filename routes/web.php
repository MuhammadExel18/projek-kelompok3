<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/anggota', function () {
    return view('anggota');
   });
Route::get('/ketua', function () {
    return view('ketua');
});

Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::put('/kategori/{kategori_id}/update', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::resource('products', \App\Http\Controllers\ProductController::class);
