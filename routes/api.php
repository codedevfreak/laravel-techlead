<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route untuk membuat pengguna baru
Route::post('/users', [UserController::class, 'createUser']);

// Route untuk mendapatkan daftar pengguna
Route::get('/users', [UserController::class, 'getUsers']);
