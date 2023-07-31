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
use Modules\Index\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('terms', [IndexController::class, 'terms'])->name('terms');
Route::get('profile', [IndexController::class, 'profile'])->name('user_profile')->middleware('auth');
Route::get('profile/edit', [IndexController::class, 'profile_edit'])->name('user_profile_edit')->middleware('auth');
Route::post('profile/edit', [IndexController::class, 'profile_edit'])->name('user_profile_edit_submit')->middleware('auth');
