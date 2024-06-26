<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\kelurahanController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {

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
//kelurahan
Route::get('/admin/kelurahan',[kelurahanController::class,'index'])->name('kelurahans.index');
Route::get('/admin/kelurahan/create',[kelurahanController::class,'create'])->name('kelurahans.create');
Route::post('/admin/kelurahan/store',[kelurahanController::class,'store'])->name('kelurahans.store');
Route::get('/admin/kelurahan/{kelurahan}',[kelurahanController::class,'show'])->name('kelurahans.show');
Route::delete('/admin/kelurahan/{kelurahan}', [kelurahanController::class, 'destroy'])->name('kelurahans.destroy');
Route::get('/admin/kelurahan/{kelurahan}/edit', [kelurahanController::class, 'edit'])->name('kelurahans.edit');
Route::put('/admin/kelurahan/{kelurahan}', [kelurahanController::class, 'update'])->name('kelurahans.update');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
