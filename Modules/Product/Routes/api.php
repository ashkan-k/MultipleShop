<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Dashboard\Api\ApiGalleryController;
use Modules\Product\Http\Controllers\Dashboard\Api\ApiProductController;
use Modules\Product\Http\Controllers\Dashboard\FeatureController;
use Modules\Product\Http\Controllers\Dashboard\ProductFeatureController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('galleries')->middleware('check_admin')->group(function () {
    Route::get('{product}', [ApiGalleryController::class, 'list'])->name('galleries.api.index');
    Route::post('{product}', [ApiGalleryController::class, 'store'])->name('galleries.api.store');
    Route::delete('{gallery}', [ApiGalleryController::class, 'destroy'])->name('galleries.api.delete');
});


Route::middleware('check_admin')->group(function () {
    // Features
    Route::post('features', [FeatureController::class, 'store']);
    Route::post('features/{feature}', [FeatureController::class, 'update']);
    Route::get('features/items/{feature}', [FeatureController::class, 'feature_filter_items']);

    // Product Features
    Route::post('products-features', [ProductFeatureController::class, 'store']);
    Route::post('products-features/{product_feature}', [ProductFeatureController::class, 'update']);
});


// Products
Route::get('', [ApiProductController::class, 'list'])->name('products.api.list');
