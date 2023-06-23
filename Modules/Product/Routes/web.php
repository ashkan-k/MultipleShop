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

Route::prefix('products')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('colors', ColorController::class);
});

