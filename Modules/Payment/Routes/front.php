<?php


use Illuminate\Support\Facades\Route;
use Modules\Payment\Http\Controllers\Front\ZarinPalPaymentController;

// پرداخت و درگاه پرداخت
Route::post('payment', [ZarinPalPaymentController::class, 'pay'])->name('pay')->middleware('auth');
Route::get('payment/callback', [ZarinPalPaymentController::class, 'call_back'])->name('callback')->middleware('auth');
