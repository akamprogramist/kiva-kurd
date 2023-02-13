<?php

use App\Http\Controllers\BuysellController;
use App\Models\Loan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\LandingController;
use App\Models\Buysell;

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

Route::get('/', [LandingController::class, 'index']);

// all loans
Route::get('/loans', [LoanController::class, 'index']);

// show create loan
Route::get('/loans/create', [LoanController::class, 'create']);

// Store loan data
Route::post('/loans', [LoanController::class, 'store']);

// Delete listing
Route::delete('/loans/{loan}', [LoanController::class, 'destroy']);

// show single loan
Route::get('/loans/{loan}', [LoanController::class, 'show']);



// all invests
Route::get('/invests', [InvestController::class, 'index']);

// show create loan
Route::get('/invests/create', [InvestController::class, 'create']);

// Store Invest data
Route::post('/invests', [InvestController::class, 'store']);

// Delete listing
Route::delete('/invests/{invest}', [InvestController::class, 'destroy']);

// show single Invest
Route::get('/invests/{invest}', [InvestController::class, 'show']);



// all buysells
Route::get('/buysells', [BuysellController::class, 'index']);

// show create loan
Route::get('/buysells/create', [BuysellController::class, 'create']);

// Store buysell data
Route::post('/buysells', [BuysellController::class, 'store']);

// Delete listing
Route::delete('/buysells/{buysell}', [BuysellController::class, 'destroy']);

// show single buysell
Route::get('/buysells/{buysell}', [BuysellController::class, 'show']);
