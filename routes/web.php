<?php

use App\Http\Controllers\CashierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CashierController::class, 'dashboard'])->name('dashboard');
Route::get('/transaction', [cashierController::class, 'transaction'])->name('transaction');
Route::get('/products', [CashierController::class, 'products'])->name('products');
Route::get('/history', [CashierController::class, 'history'])->name('history');
Route::get('/receipt', [CashierController::class, 'receipt'])->name('receipt');
Route::get('/addProducts', [CashierController::class, 'addProducts'])->name('addProducts');
