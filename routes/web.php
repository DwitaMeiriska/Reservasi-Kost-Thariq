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
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\TransaksiController;

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

// Route user
Route::middleware('auth')->group(function () {
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware('role:admin')->group(function () {
    //semua route untuk admin disini
    Route::get('/halaman-c',function () {
        return view('contoh.halaman-a');
    });
});


Route::resource('/', LandingController::class);
Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/portofolio', PortofolioController::class);
Route::resource('/manajemen-data-kost', KostController::class);

Route::get('/kost', [KostController::class, 'indexA']);
Route::get('/kamarb', [KostController::class, 'indexB']);
Route::get('/pesanan/{id}', [KostController::class, 'show'])->name('show');
Route::get('/show/{id}', [PesananController::class, 'pemesanan'])->name('show');
Route::get('/pembayaran/{id}', [PesananController::class, 'pembayaran'])->name('pembayaran');
Route::get('/riwayat_transaksi',[PesananController::class, 'transaksi'])->name ('riwayat_transaksi.index');
Route::get('/pembayaran/sukses',[PesananController::class, 'sukses'])->name ('pembayaran.sukses');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
Route::post('/pembayaran', [PesananController::class, 'store'])->name('pembayaran.store');

