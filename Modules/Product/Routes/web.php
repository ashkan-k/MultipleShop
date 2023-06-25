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
use Modules\Product\Http\Controllers\Dashboard\CategoryController;
use Modules\Product\Http\Controllers\Dashboard\ColorController;
use Modules\Product\Http\Controllers\Dashboard\FeatureController;
use Modules\Product\Http\Controllers\Dashboard\ProductController;
use Modules\Product\Http\Controllers\Dashboard\SizeController;

//Route::prefix('products')->group(function () {
//
//});

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('colors', ColorController::class);
Route::resource('sizes', SizeController::class);
Route::resource('features', FeatureController::class);
//    Route::resource('features', FeatureController::class)->only(['index', 'destroy']);
