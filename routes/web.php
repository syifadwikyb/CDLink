<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');

// SIGNOUT
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

// Middleware protected route
Route::get('/coba', [LoginController::class, 'coba'])->middleware('auth')->name('coba');

// Admin routes with middleware
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/coba', function () {
        return view('coba');
    })->name('coba');
});

// Contoh controller login
Route::post('/login', 'LoginController@login')->name('login');

// Change Password
Route::get('/changepass', [LoginController::class, 'changepass'])->name('changepass');
Route::post('/changepass-proses', [LoginController::class, 'changepass_proses'])->name('changepass-proses');
