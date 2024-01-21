<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopgridController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [ShopgridController::class, 'index']) ->name('home');
Route::get('/product-category', [ShopgridController::class, 'category']) ->name('product.category');
Route::get('/product-detail', [ShopgridController::class, 'product']) ->name('product.detail');
Route::get('/card/show', [CardController::class, 'index']) ->name('card.show');
Route::get('/checkout', [CheckController::class, 'index']) ->name('checkout');
Route::get('/customer/login', [CustomerAuthController::class, 'login']) ->name('customer.login');
Route::get('/customer/register', [CustomerAuthController::class, 'register']) ->name('customer.register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
