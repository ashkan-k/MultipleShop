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
use Modules\Setting\Http\Controllers\Dashboard\SettingController;

Route::get('settings/dynamic/form/{key}', [SettingController::class, 'dynamic_form'])->name('dynamic_form');
Route::get('settings/dynamic/form/{key}/{setting}', [SettingController::class, 'dynamic_form']);

Route::resource('settings', SettingController::class);
