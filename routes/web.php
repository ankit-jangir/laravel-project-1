<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{category}', [ProductController::class, 'category'])->name('products.category');
Route::get('/products/{category}/{id}', [ProductController::class, 'show'])->name('products.show');
