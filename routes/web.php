<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/keranjang', \App\Http\Controllers\KeranjangController::class);
Route::resource('/pengguna', \App\Http\Controllers\PenggunaController::class);
