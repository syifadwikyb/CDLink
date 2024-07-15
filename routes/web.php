<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PreviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// SIGNIN
Route::get('/sign-in', [LoginController::class, 'index'])->name('sign-in');
Route::post('/sign-in-proses', [LoginController::class, 'signin_proses'])->name('sign-in-proses');

// SIGNOUT
Route::get('/signout', [LoginController::class, 'signout'])->name('signout');

// SIGNUP
Route::get('/sign-up', [LoginController::class, 'signup'])->name('sign-up');
Route::post('/sign-up-proses', [LoginController::class, 'signup_proses'])->name('sign-up-proses');

// Middleware protected route
Route::get('/coba', [LoginController::class, 'coba'])->middleware('auth')->name('coba');

// Admin routes with middleware
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/coba', function () {
        return view('coba');
    })->name('coba');
});

// Contoh controller login
Route::post('/signin', 'LoginController@login')->name('signin');

// Change Password
Route::get('/changepass', [LoginController::class, 'changepass'])->name('changepass');
Route::post('/changepass-proses', [LoginController::class, 'changepass_proses'])->name('changepass-proses');

// Save cust

Route::post('/save-previews', [PreviewController::class, 'store'])->name('previews.store');
Route::post('/previews', [PreviewController::class, 'store'])->name('previews.store');


