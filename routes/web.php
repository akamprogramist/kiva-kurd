<?php

use App\Models\Loan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\LandingController;

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

// // all loans
// Route::get('/loans', [LoanController::class, 'index']);

// // show create loan
// Route::get('/loans/create', [LoanController::class, 'create']);

// // Store loan data
// Route::post('/loans', [LoanController::class, 'store']);

// // Delete listing
// Route::delete('/loans/{loan}', [LoanController::class, 'destroy']);

// // show single loan
// Route::get('/loans/{loan}', [LoanController::class, 'show']);


// // all invests
// Route::get('/', [InvestController::class, 'index']);

// // show create loan
// Route::get('/loans/create', [InvestController::class, 'create']);

// // Store Invest data
// Route::post('/loans', [InvestController::class, 'store']);

// // Delete listing
// Route::delete('/loans/{invest}', [InvestController::class, 'destroy']);

// // show single Invest
// Route::get('/loans/{invest}', [InvestController::class, 'show']);
