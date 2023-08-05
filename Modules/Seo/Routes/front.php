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
use Modules\Seo\Http\Controllers\SiteMapController;
use Modules\Ticket\Http\Controllers\Front\FrontTicketAnswerController;
use Modules\Ticket\Http\Controllers\Front\FrontTicketController;

// SiteMap
Route::view('/sitemap', 'seo::sitemap-links')->name('sitemap-links');
Route::get('sitemap-links', [SiteMapController::class, 'sitemapLinks'])->name('sitemap');
Route::get('sitemap-products.xml', [SiteMapController::class, 'sitemapProducts'])->name('sitemap.products');
Route::get('sitemap-product-categories.xml', [SiteMapController::class, 'sitemapProductCategories'])->name('sitemap.product.categories');
Route::get('sitemap-blog.xml', [SiteMapController::class, 'sitemapBlogs'])->name('sitemap.blog');
Route::get('sitemap-blog-categories.xml', [SiteMapController::class, 'sitemapBlogCategories'])->name('sitemap.blog.categories');
Route::get('sitemap-pages.xml', [SiteMapController::class, 'sitemapPages'])->name('sitemap.pages');
