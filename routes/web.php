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

Route::get('/', function () { return view('pages/homepage'); })->name('homepage');
Route::get('/login', function () { return view('pages/login'); });
Route::get('/register', function () { return view('pages/register'); });
Route::get('/panduan_layanan', function () { return view('pages/panduan_layanan'); })->name('panduan_layanan');

Route::middleware(['auth'])->group(function () {
    // Route::get('history/{id}', [App\Http\Controllers\MainController::class, 'history'])->name('history');

    Route::get('topup', [App\Http\Controllers\MainController::class, 'topup'])->name('topup');
    Route::post('topup_koin/{id}', [App\Http\Controllers\MainController::class, 'topup_koin'])->name('topup_koin');

    Route::get('profile/{id}', [App\Http\Controllers\MainController::class, 'profile'])->name('profile');
    Route::post('edit_profile/{id}', [App\Http\Controllers\MainController::class, 'edit_profile'])->name('edit_profile');
    
    Route::get('layanan/{id}', [App\Http\Controllers\MainController::class, 'layanan'])->name('layanan');
    Route::post('layanan_ringkasin/{id}', [App\Http\Controllers\MainController::class, 'layanan_ringkasin'])->name('layanan_ringkasin');
    Route::post('upload', [App\Http\Controllers\MainController::class, 'upload'])->name('upload');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
