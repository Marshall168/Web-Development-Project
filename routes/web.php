<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomAuthController;


Route::get('/', function () {
    return view('home');
});


Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){

    Route::get('/links', 'LinkController@index');
    Route::get('/links/new', 'LinkConroller@create');
    Route::post('/links/new', 'LinkConroller@store');
    Route::get('/links/{link}', 'LinkConroller@edit');
    Route::post('/links/{link}', 'LinkConroller@update');
    Route::get('/links/new', 'LinkConroller@destroy');

    Route::get('/settings', 'UserController@edit');
    Route::get('/settings', 'UserController@edit');





});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}',[PostController::class, 'show']);
require __DIR__.'/auth.php';

Route::get('/login', function() {
    return view('login');
});

Route::get('/sign', function() {
    return view('sign');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/news', function() {
    return view('news');
});

Route::get('/homepage', function() {
    return view('homepage');
});

Route::get('/register', function() {
    return view('register');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


