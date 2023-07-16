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
use Modules\Blog\Http\Controllers\Front\FrontBlogController;

Route::get('product/{slug}', [FrontBlogController::class, 'product_detail'])->name('product_detail');
Route::get('blogs', [FrontBlogController::class, 'blogs'])->name('blogs_list');
