<?php


// BulkActions
use App\Http\Controllers\BulkActionController;
use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\Dashboard\UserController;

Route::post('admin/bulk/actions', [BulkActionController::class, 'admin_bulk'])->middleware('check_admin');
// Users
Route::post('admin/users/status/change/{user}', [UserController::class, 'change_status'])->middleware('check_admin');
