<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ArticlesController;

Route::resource('articles',ArticlesController::class);
Route::get('/about',\App\Http\Controllers\AboutController::class);

Route::get('/', static function () {
    return redirect()->route('articles.index');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class,'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
