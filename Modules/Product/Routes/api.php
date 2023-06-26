<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Dashboard\Api\ApiGalleryController;

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
});
