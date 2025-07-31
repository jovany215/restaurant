<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('menu');
Route::get('/category/{category}', [ProductController::class, 'byCategory']);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{{product}}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart',[CartController::class, 'index'])->name('cart.index');
