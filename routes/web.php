<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});


//dashboard route
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

//contact route
Route::get('/contact', function() {
    return view('contact');
});

//register route
Route::get('/register', function() {
    return view('register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy']);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/dashboard', [PostController::class, 'page']);


