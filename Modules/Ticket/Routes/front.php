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
use Modules\Ticket\Http\Controllers\Front\FrontTicketAnswerController;
use Modules\Ticket\Http\Controllers\Front\FrontTicketController;

Route::resource('tickets', FrontTicketController::class, ['as' => 'front']);

Route::get('ticket-answers/{ticket}', [FrontTicketAnswerController::class, 'show'])->name('front.ticket-answers.show');
Route::post('ticket-answers/{ticket}/store', [FrontTicketAnswerController::class, 'store'])->name('front.ticket-answers.store');
