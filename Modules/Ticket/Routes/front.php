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

Route::resource('profile/tickets', FrontTicketController::class, ['as' => 'front']);

Route::get('profile/ticket-answers/{ticket:ticket_number}', [FrontTicketAnswerController::class, 'show'])->name('front.ticket-answers.show');
Route::post('profile/ticket-answers/{ticket:ticket_number}/store', [FrontTicketAnswerController::class, 'store'])->name('front.ticket-answers.store');
