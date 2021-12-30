<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AtributController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiAtributController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/atribut', [AtributController::class, 'index']);
    Route::post('/atribut', [AtributController::class, 'store']);

    Route::get('/nilaiatribut', [NilaiAtributController::class, 'index']);
    Route::post('/nilaiatribut', [NilaiAtributController::class, 'store']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegistrationController::class, 'index']);
    Route::post('/register', [RegistrationController::class, 'store']);

    Route::get('/forgot', [ForgetController::class, 'index']);
    Route::post('/forgot', [ForgetController::class, 'forget']);

    Route::get('/konsultasi', function () {
        return "Ini fitur konsultasi";
    });
});

Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/', [HomeController::class, 'index'])->middleware('auth');
// Route::get('/atribut', [AtributController::class, 'index']);

// //Authentication
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegistrationController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegistrationController::class, 'store']);
