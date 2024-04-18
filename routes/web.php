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

Route::resource('articles',ArticlesController::class)->only(['index','show','create','store','edit','update']);
//
//Route::get('/',[HomeController::class,'index'])->name('home.index');
//Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
/*Route::get('/', function () {
    //return view('welcome');
    //return '<h1>Welcome to home page</h1><';
    return view('home.index',[]);
})->name('home.index');*/

/*Route::get('/contact', static function () {
    return view('home.contact');
   // return 'Contact';
})->name('home.contact');*/

/*Route::get('/articles/1', static function () {
    return 'Article 1';
});

Route::get('/articles/2', static function () {
    return 'Article 2';
});*/

/*Route::get('/articles/{id}', function ($articleID) {
    //return "Article $id";
    $articles = [
        1=>[
            'title'=>'First article',
            'content'=> 'First article text 123123'
        ],
        2=>[
            'title'=> 'Second article',
            'content'=>'Second article text 123123'
        ]
    ];
    abort_if(!isset($articles[$articleID]),404);
    return view('articles.show',['article'=> $articles[$articleID]]);
})->name('articles.show');*/

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class,'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
