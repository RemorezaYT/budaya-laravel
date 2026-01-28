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

    /*
    |--------------------------------------------------------------------------
    | QUIZ (HASIL MIGRASI DARI PHP LAMA)
    |--------------------------------------------------------------------------
    */

    // Menu kuis
    Route::get('/questions', [QuizController::class, 'menu'])->name('questions');
    Route::get('/quiz', [QuizController::class, 'menu'])->name('quiz');

    // Simpan nickname
    Route::post('/quiz/nickname', [QuizController::class, 'setNickname'])
        ->name('quiz.nickname');

    // Simpan hasil kuis
    Route::post('/quiz/results', [QuizController::class, 'storeResult'])
        ->name('quiz.results.store');

    // Kuis per level
    Route::get('/quiz/mudah', [QuizController::class, 'mudah'])->name('quiz.mudah');
    Route::get('/quiz/normal', [QuizController::class, 'normal'])->name('quiz.normal');
    Route::get('/quiz/sulit', [QuizController::class, 'sulit'])->name('quiz.sulit');

});

/*
|--------------------------------------------------------------------------
| DEFAULT
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});
