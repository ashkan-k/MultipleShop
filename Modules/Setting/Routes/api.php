<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Setting\Http\Controllers\Api\ApiSettingController;
use Modules\Setting\Http\Controllers\Dashboard\SettingController;

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

Route::post('{setting:key}', [ApiSettingController::class, 'update']);
Route::post('status/change/{setting}', [SettingController::class, 'change_status']);
