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

Route::post('/ckeditor/CK' , [DashboardController::class , 'upload_ckeditor_image'])->name('upload_ckeditor_image');
