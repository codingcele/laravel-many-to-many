<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/product', [MainController::class, 'productHome']) -> name('productHome');

Route::get('/product/create', [MainController::class, 'productCreate']) -> name('product.create');

Route::get('/product/edit/{product}', [MainController::class, 'productEdit']) -> name('product.edit');

Route::post('/product/edit/{product}', [MainController::class, 'productUpdate']) -> name('product.update');

Route::get('/product/delete/{product}', [MainController::class, 'productDelete']) -> name('product.delete');

Route::post('/product/create/store', [MainController::class, 'productStore']) -> name('product.store');
