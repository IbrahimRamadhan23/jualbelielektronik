<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;
use App\http\Controllers\HomeController;
use App\http\Controllers\KeranjangController;
use App\http\Controllers\CheckoutController;



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
    return view('checkout');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/keranjang', [KeranjangController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);