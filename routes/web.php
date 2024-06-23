<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;
use App\http\Controllers\HomeController;
use App\http\Controllers\KeranjangController;
use App\http\Controllers\CheckoutController;
use App\http\Controllers\TambahprodukController;
use App\http\Controllers\KatalogController;
use App\http\Controllers\OrderanController;
use App\http\Controllers\DetailprodukController;
use App\http\Controllers\UbahprodukController;
use App\http\Controllers\ProfileController;







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
    return view('profile');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/keranjang', [KeranjangController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/tambahproduk', [TambahprodukController::class, 'index']);
Route::get('/katalog', [KatalogController::class, 'index']);
Route::get('/orderan', [OrderanController::class, 'index']);
Route::get('/detailproduk', [DetailprodukController::class, 'index']);
Route::get('/ubahproduk', [UbahprodukController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);