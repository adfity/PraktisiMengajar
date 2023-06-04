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
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\LoginControl::class, 'show'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginControl::class, 'login']);

Route::get('/register', [App\Http\Controllers\RegisterControler::class, 'show'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterControler::class, 'register']);