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

Route::get('blog/{slug}', [FrontBlogController::class, 'blog_detail'])->name('blog_detail');
Route::get('blog/category/{slug}', [FrontBlogController::class, 'blogs'])->name('blog_category_list');
Route::get('blog', [FrontBlogController::class, 'blogs'])->name('blogs_list');
