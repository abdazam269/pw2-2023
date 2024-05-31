<?php

// use App\Http\Controllers\AdminController;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);
//pasiens
Route::get('/admin/pasien',[PasienController::class,'index'])->name('pasiens.index');
Route::get('/admin/pasien/create',[PasienController::class,'create'])->name('pasiens.create');
Route::post('/admin/pasien/store',[PasienController::class,'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}',[PasienController::class,'show'])->name('pasiens.show');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
