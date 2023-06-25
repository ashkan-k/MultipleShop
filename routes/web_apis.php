<?php


// BulkActions
use App\Http\Controllers\BulkActionController;
use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Dashboard\FeatureController;
use Modules\Product\Http\Controllers\Dashboard\ProductFeatureController;
use Modules\User\Http\Controllers\Dashboard\UserController;

Route::post('admin/bulk/actions', [BulkActionController::class, 'admin_bulk'])->middleware('check_admin');
// Users
Route::post('admin/users/status/change/{user}', [UserController::class, 'change_status'])->middleware('check_admin');

// Products
Route::prefix('admin')->group(function () {
    Route::post('products-features', [ProductFeatureController::class, 'store']);
    Route::post('products-features/{productFeature}', [ProductFeatureController::class, 'update']);
});
