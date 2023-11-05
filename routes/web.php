<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\fullNameController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/product-details/{id}', [HomeController::class, 'ProductDetails'])->name('product-details');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/full-name', [fullNameController::class, 'fullName'])->name('full-name');
    Route::post('/get-full-name', [fullNameController::class, 'getFullName'])->name('get-full-name');
    Route::get('/calculator-page', [CalculatorController::class, 'calculatorPage'])->name('calculator-page');
    Route::post('/calculator-result', [CalculatorController::class, 'calculatorResult'])->name('calculator-result');
    Route::get('/create-product', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store-product', [ProductController::class, 'store'])->name('products.store');
});
