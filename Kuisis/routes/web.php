<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\LeaderboardController;

Route::get('/', [HomeController::class, 'home'])->middleware('auth')->name('HOME');
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/profile',[ProfileController::class, 'profile'] )->middleware('auth');

Route::get('/login',[UserController::class, 'login'])->middleware('guest')->name('login');

Route::post('/login',[UserController::class, 'autenticate'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/registration',[UserController::class, 'registration'])->middleware('guest');

Route::post('/registration',[UserController::class, 'store'])->middleware('guest');

Route::get('/list-quiz',[QuizsController::class, 'quizs'])->middleware('auth');

Route::post('/question',[QuestionsController::class, 'listquiz']);

Route::get('/quiz',[QuestionsController::class, 'question'])->middleware('auth');

Route::post('/quiz',[QuestionsController::class, 'answer'])->middleware('auth');

Route::get('/finish', [QuestionsController::class, 'finish'])->middleware('auth');

Route::get('/leaderboard', [LeaderboardController::class, 'leaderboard'])->middleware('auth');

Route::get('/image/logo-quiz.png', 'HomeController@displayImage');

Route::get('/dashboard',[AdminController::class, 'dashboard'])->middleware('auth');

Route::get('/add-quiz', [AdminController::class, 'addquiz'])->middleware('auth');

Route::post('/add-quiz', [AdminController::class, 'insertquiz'])->middleware('auth');

Route::get('/add-questions', [AdminController::class, 'addquestions'])->middleware('auth');

Route::post('/add-questions', [AdminController::class, 'insertquestions'])->middleware('auth');

Route::get('/list-users', [AdminController::class, 'listuser'])->middleware('auth');