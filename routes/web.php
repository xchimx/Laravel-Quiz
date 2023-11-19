<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/highscore', function () {
    return view('highscore');
});

Route::get('/home', function () {
    return redirect('/chimadmin');
});

Route::get('/settings', function () {
    return view('settings');
})->middleware('isSessionActive');

Route::get('/quiz', function () {
    return view('quiz');
})->middleware('isSessionActive');

Route::get('/end', function () {
    return view('end');
})->middleware('isSessionActive');

Auth::routes(['register' => false]);

Route::get('/chimadmin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chimadmin/questions', [App\Http\Controllers\QuizController::class, 'index'])->name('quiz');
Route::get('/chimadmin/categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('categories');
