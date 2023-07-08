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

Route::get('products/{category:slug}', [FrontProductController::class, 'products'])->name('category.products');
Route::get('search', [FrontProductController::class, 'search'])->name('search');
