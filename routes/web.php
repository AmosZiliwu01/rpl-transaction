<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::group(['prefix' => 'transaction'],function(){
    Route::get('/', [TransactionController::class, 'index'])->name('transaction.index');
    Route::post('/search-barcode', [TransactionController::class, 'searchProduct'])->name('transaction.searchProduct');
    Route::post('/insert', [TransactionController::class, 'insert'])->name('transaction.insert');
    Route::post('/get-pesanan', [TransactionController::class, 'pesanan'])->name('transaction.pesanan');
});
