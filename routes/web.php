<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

