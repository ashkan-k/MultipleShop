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
use Modules\Product\Http\Controllers\Dashboard\BrandController;
use Modules\Product\Http\Controllers\Dashboard\CategoryController;
use Modules\Product\Http\Controllers\Dashboard\ColorController;
use Modules\Product\Http\Controllers\Dashboard\FeatureController;
use Modules\Product\Http\Controllers\Dashboard\GalleryController;
use Modules\Product\Http\Controllers\Dashboard\ProductController;
use Modules\Product\Http\Controllers\Dashboard\ProductFeatureController;
use Modules\Product\Http\Controllers\Dashboard\SizeController;

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('colors', ColorController::class);
Route::resource('sizes', SizeController::class);
Route::resource('brands', BrandController::class);
Route::resource('features', FeatureController::class)->only(['index', 'destroy']);
Route::resource('product-features', ProductFeatureController::class, ['prefix' => 'product-features'])->only(['index', 'destroy']);

Route::get('galleries/{product}', [GalleryController::class, 'index'])->name('galleries.index');
