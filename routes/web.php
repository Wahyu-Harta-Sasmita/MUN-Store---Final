<?php

use App\Http\Controllers\CashierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CashierController::class, 'dashboard'])->name('dashboard');
Route::get('/transaction', [CashierController::class, 'transaction'])->name('transaction');
Route::get('/products', [CashierController::class, 'products'])->name('products');
Route::get('/history', [CashierController::class, 'history'])->name('history');
