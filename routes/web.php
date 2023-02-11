<?php

use App\Http\Controllers\LoanController;
use App\Models\Loan;
use Illuminate\Support\Facades\Route;

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
// all loans
Route::get('/', [LoanController::class, 'index']);

// show create loan
Route::get('/loans/create', [LoanController::class, 'create']);

// Store loan data
Route::post('/loans', [LoanController::class, 'store']);

// Delete listing
Route::delete('/loans/{loan}', [LoanController::class, 'destroy']);

// show single loan
Route::get('/loans/{loan}', [LoanController::class, 'show']);
