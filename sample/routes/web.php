<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])
    ->middleware('guest');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


Route::get('/change',[App\Http\Controllers\UserController::class, 'index'])
    ->middleware('auth');
Route::post('/change', [App\Http\Controllers\UserController::class, 'store'])
    ->middleware('auth');

Route::get('/edit', [App\http\Controllers\ArticleController::class, 'index'])
    ->name('edit.index');
Route::get('/create', [App\Http\Controllers\ArticleController::class, 'create'])
    ->name('edit.create');
Route::post('/articles', [App\http\Controllers\ArticleController::class, 'store'])
    ->name('edit.store');
