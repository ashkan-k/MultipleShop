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
use Modules\Order\Http\Controllers\Front\FrontOrderController;

Route::get('profile/orders', [FrontOrderController::class, 'orders'])->name('orders');
Route::get('order/submit', [FrontOrderController::class, 'order_submit'])->name('order_submit');
