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
use Modules\Blog\Http\Controllers\Dashboard\BlogCategoryController;
use Modules\Blog\Http\Controllers\Dashboard\BlogController;

Route::resource('blogs/categories', BlogCategoryController::class, ['as' => 'blog']);
Route::resource('blogs', BlogController::class);
