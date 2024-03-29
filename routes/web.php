<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopgridController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UniteController;

Route::get('/', [ShopgridController::class, 'index']) ->name('home');
Route::get('/product-category', [ShopgridController::class, 'category']) ->name('product.category');
Route::get('/product-detail', [ShopgridController::class, 'product']) ->name('product.detail');
Route::get('/card/show', [CardController::class, 'index']) ->name('card.show');
Route::get('/checkout', [CheckController::class, 'index']) ->name('checkout');
Route::get('/customer/login', [CustomerAuthController::class, 'login']) ->name('customer.login');
Route::get('/customer/register', [CustomerAuthController::class, 'register']) ->name('customer.register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/manage', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/sub-category/manage', [SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub-category.create');

    Route::get('/brand/manage', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/add', [BrandController::class, 'create'])->name('brand.add');
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/unit/manage', [UniteController::class, 'index'])->name('unit.index');
    Route::get('/unit/add', [UniteController::class, 'create'])->name('unit.add');
});
