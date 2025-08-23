<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\PaymentController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('front.index');
    Route::get('/type/{type}', [FrontController::class, 'type'])->name('front.type');
    Route::get('/product/{id}', [FrontController::class, 'product'])->name('front.product');
    Route::get('/category/{id}', [FrontController::class, 'category'])->name('front.category');
    Route::get('/blog/{blog:slug}', [FrontController::class, 'blog'])->name('front.blog');
    Route::get('/search', [FrontController::class, 'search'])->name('front.search');
    Route::get('/terms', function () {
        return view('front.terms');
    })->name('front.terms');
    Route::get('/privacy', function () {
        return view('front.privacy');
    })->name('front.privacy');
    //payment routes
    Route::middleware('auth')->group(function () {
        Route::post('/pay', [PaymentController::class, 'payment'])->name('front.pay');
        Route::get('/success', [PaymentController::class, 'success'])->name('front.success');
        Route::get('/cancel', [PaymentController::class, 'cancel'])->name('front.cancel');
    });
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
