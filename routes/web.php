<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route untuk halaman Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');