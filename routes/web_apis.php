<?php


// BulkActions
use App\Http\Controllers\BulkActionController;
use Illuminate\Support\Facades\Route;

Route::post('admin/bulk/actions', [BulkActionController::class, 'admin_bulk'])->middleware('check_admin');
