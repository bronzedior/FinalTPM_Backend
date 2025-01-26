<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// register
Route::get('/auth/registerGroup', [RegistrationController::class, 'showRegisterGroup'])->name('auth.registerGroup');
Route::post('/auth/registerGroup', [RegistrationController::class, 'submitRegisterGroup']);

Route::get('/auth/registerBinusian', [RegistrationController::class, 'showRegisterBinusian'])->name('auth.registerBinusian');
Route::get('/auth/registerNonBinusian', [RegistrationController::class, 'showRegisterNonBinusian'])->name('auth.registerNonBinusian');

Route::post('/auth/registerBinusian', [RegistrationController::class, 'submitRegisterBinusian'])->name('auth.registerBinusian.submit');
Route::post('/auth/registerNonBinusian', [RegistrationController::class, 'submitRegisterNonBinusian'])->name('auth.registerNonBinusian.submit');

//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('loginStore');

//logout
Route::post('/logout', [AuthController::class,'logout'])->name('logout');
