<?php

// use App\Http\Controllers\AdminController;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);
