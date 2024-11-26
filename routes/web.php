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

// Authentication routes
Auth::routes();

Route::get('/money-transfer', function () {
    return view('money-transfer');
});

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin', [DashboardController::class, 'index'])->name('voyager.dashboard');

Route::get('/', [IndexController::class, 'index']);

Route::get('/moneytransfer', [MoneyTransferController::class, 'index']);
Route::get('/contactus', [ContactUsController::class, 'index']);

Route::get('/privacypolicy', function () {
    return view('privacy_policy');
});
Route::get('/termsandcondition', function () {
    return view('terms_and_condition');
});
// Wave routes
// Wave::routes();
