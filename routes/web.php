<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\API\HomeController;

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
    return view('login');
});

Route::post('quotes', [HomeController::class, 'sendQuote']);

Route::get('login', [LoginController::class, 'index']);

Route::get('booking', [LoginController::class, 'booking'])->name('booking.plane');
Route::get('payments', [LoginController::class, 'payments'])->name('amount');
Route::get('addBooking', [LoginController::class, 'addBooking'])->name('add');
Route::get('bookinginformation', [LoginController::class, 'bookinginformation'])->name('details');

Route::get('dashboard', [LoginController::class, 'dashboard'])->name('show');
Route::get('user', [LoginController::class, 'user'])->name('person');
Route::get('transferResult', [LoginController::class, 'transferResult'])->name('transfer');






