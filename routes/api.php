<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('categories', CategoryController::class)->except([
    'create', 'edit'
]);

Route::resource('products', ProductController::class)->except([
    'create', 'edit'
]);

Route::resource('users', UserController::class)->except([
    'create', 'edit'
]);

Route::resource('orders', OrderController::class)->except([
    'create', 'edit'
]);


