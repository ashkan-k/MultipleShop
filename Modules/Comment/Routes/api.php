<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Comment\Http\Controllers\Api\ApiCommentController;
use Modules\Comment\Http\Controllers\Dashboard\CommentController;

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

Route::group([], function (){
    Route::post('status/change/{comment}', [CommentController::class, 'change_status']);
    Route::post('points/get/{comment}/{type}', [ApiCommentController::class, 'get_submit_points'])->name('get_submit_points');
    Route::post('points/submit/{comment}', [ApiCommentController::class, 'submit_point'])->name('submit_comment_point');
})->middleware('check_admin');

Route::post('answer/create/{comment}', [ApiCommentController::class, 'change_status']);
