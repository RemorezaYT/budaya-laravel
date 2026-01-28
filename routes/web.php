<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetaBudayaController;
use App\Http\Controllers\PemberitahuanController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/

Route::middleware('requireLogin')->group(function () {

    // Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Peta Budaya
    Route::get('/peta-budaya', [PetaBudayaController::class, 'index'])->name('peta-budaya');

    // Pemberitahuan
    Route::get('/pemberitahuan', [PemberitahuanController::class, 'index'])->name('pemberitahuan');
    Route::post('/pemberitahuan', [PemberitahuanController::class, 'store'])->name('pemberitahuan.store');

    /*
    |--------------------------------------------------------------------------
    | QUIZ (HASIL MIGRASI DARI PHP LAMA)
    |--------------------------------------------------------------------------
    */

    // Menu questions.php
    Route::get('/questions', [QuizController::class, 'menu'])->name('questions');

    // Alias /quiz ke menu yang sama
    Route::get('/quiz', [QuizController::class, 'menu'])->name('quiz');

    // Kuis per level
    Route::get('/quiz/mudah',  [QuizController::class, 'mudah'])->name('quiz.mudah');
    Route::get('/quiz/normal', [QuizController::class, 'normal'])->name('quiz.normal');
    Route::get('/quiz/sulit',  [QuizController::class, 'sulit'])->name('quiz.sulit');
});

/*
|--------------------------------------------------------------------------
| DEFAULT
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});
