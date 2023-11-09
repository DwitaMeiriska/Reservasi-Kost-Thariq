<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KamarbController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortofolioController;
// INI REGISTER USER use App\Http\Controllers\PesanKostController;

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





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
Route::resource('/', LandingController::class);
Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/portofolio', PortofolioController::class);

Route::get('/kost', [\App\Http\Controllers\KostController::class, 'indexA']);
Route::get('/kamarb', [\App\Http\Controllers\KostController::class, 'indexB']);

Route::get('/pesanan/{id}', [\App\Http\Controllers\KostController::class, 'show'])->name('show');
// INI YG REGISTER USER Route::resource('/pesankost', PesanKostController::class);
Route::get('/show/{id}', [\App\Http\Controllers\KostController::class, 'show'])->name('show');
Route::get('/pembayaran', [\App\Http\Controllers\PesananController::class, 'pembayaran'])->name('pembayaran');