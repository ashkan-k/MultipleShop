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
Route::get('sitemap.xml' , [SiteMapController::class , 'index']);
