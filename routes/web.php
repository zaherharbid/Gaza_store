<?php

use App\Http\Controllers\FrontController;

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('front.index');
    Route::get('/product/{id}', [FrontController::class, 'product'])->name('front.product');
    Route::get('/category/{id}', [FrontController::class, 'category'])->name('front.category');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
