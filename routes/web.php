<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/product/{id}', [FrontController::class, 'product'])->name('front.product');
Route::get('/category/{id}', [FrontController::class, 'category'])->name('front.category');
