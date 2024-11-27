<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Wave\Facades\Wave;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MoneyTransferController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SendMoneyAbroadController;

// Authentication routes
Auth::routes();

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin', [DashboardController::class, 'index'])->name('voyager.dashboard');

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/moneytransfer', [MoneyTransferController::class, 'index']);
Route::get('/contactus', [ContactUsController::class, 'index']);

Route::get('/privacypolicy', function () {
    return view('privacy_policy');
});
Route::get('/termsandcondition', function () {
    return view('terms_and_condition');
});
Route::post('/forex-transactions', [SendMoneyAbroadController::class, 'store'])->name('send-money.store');

Route::post('/get-converted-amount', [IndexController::class, 'getConvertedAmount'])->name('get.converted.amount');

// Wave routes
// Wave::routes();
