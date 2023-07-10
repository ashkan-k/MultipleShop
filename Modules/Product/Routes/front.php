<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Front\FrontProductController;

Route::get('products/{slug}', [FrontProductController::class, 'products'])->name('category.products');
Route::get('search', [FrontProductController::class, 'search'])->name('search');
Route::get('product/{slug}', [FrontProductController::class, 'product_detail'])->name('product_detail');
Route::get('products', [FrontProductController::class, 'search'])->name('products_list');
