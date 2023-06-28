<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Order\Http\Controllers\Dashboard\OrderController;

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

Route::post('status/change/{order}', [OrderController::class, 'change_status']);
Route::post('payment-type/change/{order}', [OrderController::class, 'change_payment_type']);
