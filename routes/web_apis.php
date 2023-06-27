<?php


// BulkActions
use App\Http\Controllers\BulkActionController;
use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Product\Http\Controllers\Dashboard\FeatureController;
use Modules\Product\Http\Controllers\Dashboard\ProductFeatureController;
use Modules\User\Http\Controllers\Dashboard\UserController;

Route::post('admin/bulk/actions', [BulkActionController::class, 'admin_bulk'])->middleware('check_admin');
