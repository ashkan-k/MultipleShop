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
use Modules\Dashboard\Http\Controllers\Dashboard\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
## Profile
Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
Route::post('profile', [DashboardController::class, 'profile'])->name('profile_store');

## All Images
Route::get('images', [DashboardController::class, 'images'])->name('images');
Route::delete('images/delete', [DashboardController::class, 'image_delete'])->name('image_delete');

## Ckeditor
Route::post('/ckeditor/CK', [DashboardController::class, 'upload_ckeditor_image'])->name('upload_ckeditor_image');
