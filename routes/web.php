<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('pages/homepage');
});

Route::get('/layanan', function () {
    return view('pages/layanan');
});

Route::get('/history', function () {
    return view('pages/history');
});

Route::get('/profile', function () {
    return view('pages/profile');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/register', function () {
    return view('pages/register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
