<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// halaman login
Route::get('/', [PageController::class, 'login']);
Route::get('/login', [PageController::class, 'login']) ->name('login');

// proses login
Route::post('/login', [PageController::class,'prosesLogin']) ->name('login.proses');

// halaman dashboard
Route::get('/dashboard', [PageController::class, 'dashboard']) ->name('dashboard');

// halaman pengelolaan
Route::get('/pengelolaan', [PageController::class,'pengelolaan']) ->name('pengelolaan');

// halaman profile
Route::get('/profile', [PageController::class,'profile']) ->name('profile');

// proses logout
Route::post('/logout', [PageController::class,'logout']) ->name('logout');
