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
    // Features
    Route::post('features', [FeatureController::class, 'store']);
    Route::post('features/{feature}', [FeatureController::class, 'update']);

    // Product Features
    Route::post('products-features', [ProductFeatureController::class, 'store']);
    Route::post('products-features/{product_feature}', [ProductFeatureController::class, 'update']);
});
