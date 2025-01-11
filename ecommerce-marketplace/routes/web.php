<?php

use App\Http\Controllers\Apps\AppController;
use App\Http\Controllers\Apps\CartController;
use App\Http\Controllers\Apps\CatalogController;
use App\Http\Controllers\Apps\SellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/account', [AppController::class, 'account'])->name('account');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/{slug}', [CatalogController::class, 'show'])->name('catalog.detail');
Route::get('/vendor', [SellerController::class, 'index'])->name('seller');
Route::get('/vendor/{slug}', [SellerController::class, 'show'])->name('seller.detail');
