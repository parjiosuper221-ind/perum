<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomplekController;

Route::get('/', [HomeController::class, 'index']);

// Jalur khusus Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Jalur khusus Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Jalur Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Jalur Hal Lanjut
// Route untuk halaman utama - TAMBAHKAN INI

Route::get('/why', function () {
    return view('why');
});


Route::get('/komplek/citynest', [KomplekController::class, 'cityNest'])
    ->name('komplek.citynest');

Route::get('/komplek/cityhaven', [KomplekController::class, 'cityHaven'])
    ->name('komplek.cityhaven');

Route::get('/komplek/ecorow', [KomplekController::class, 'ecoRow'])
    ->name('komplek.ecorow');

Route::get('/komplek/ecoluxe', [KomplekController::class, 'ecoLuxe'])
    ->name('komplek.ecoluxe');

// Tambahkan di web.php
Route::get('/produk', function () {
    return view('produk'); // Pastikan ada file resources/views/produk.blade.php
})->name('produk');