<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\lantaiController;
use App\Http\Controllers\PetugasController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::prefix('admin')->middleware('auth', Admin::class)->group(function (){
    Route::resource('kategori', KategoriController::class);
     Route::resource('petugas', PetugasController::class);
     Route::resource('gedung', GedungController::class);
     Route::resource('lantai', lantaiController::class);
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
