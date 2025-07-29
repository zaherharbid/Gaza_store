<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('front.index');
    Route::get('/product/{id}', [FrontController::class, 'product'])->name('front.product');
    Route::get('/category/{id}', [FrontController::class, 'category'])->name('front.category');
});
