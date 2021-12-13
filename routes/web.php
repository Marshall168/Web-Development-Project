<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Models\User;
use App\Models\Post;


Route::get('/', function () {
    return view('home');
});


//dashboard route
Route::get('/dashboard', function () {
    return view('users.dashboard');
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

Route::get('/dashboard', [PostController::class, 'getDashboard']);

Route::get('/profile', [UserController::class, 'index']);
Route::get('/profile/{id}', [UserController::class, 'show']);

//posts

Route::post('/createpost', [PostController::class, 'postCreatePost'])->name('post.create')->middleware(['auth']);

Route::get('/delete-post/{post_id}', [PostController::class, 'destroy'])->name('post.delete')->middleware(['auth']);

Route::put('/editpost/{post_id}', [PostController::class, 'update'])->name('post.update')->middleware(['auth']);


//users

Route::get('/profile', [UserController::class, 'getProfile'])->name('profile');

Route::post('/updateprofile', [UserController::class, 'postSaveProfile'])->name('profile.save');

Route::get('/userimage/{filename}', [UserController::class, 'getUserImage'])->name('profile.image');





;