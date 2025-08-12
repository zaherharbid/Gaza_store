<?php

use App\Http\Middleware\CheckType;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\TypeController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CustomerController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'check', 'verified']);
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth', 'check', 'verified'])->group(function () {
        Route::resource('types', TypeController::class)->middleware(['auth', 'check', 'verified'])->except('show');
        Route::resource('products', ProductController::class)->middleware(['auth', 'check', 'verified'])->except('show');
        Route::resource('blogs', BlogController::class)->middleware(['auth', 'check', 'verified'])->except('show');
        Route::get('customers', [CustomerController::class, 'index'])->name('customers');
        Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');

        Route::get('settings', [DashboardController::class, 'settings'])->name('settings');
        Route::put('settings', [DashboardController::class, 'settings_update'])->name('settings.update');
    });
});
