<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopgridController;

Route::get('/', [ShopgridController::class, 'index']) ->name('home');
