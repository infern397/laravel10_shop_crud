<?php

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\MainController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\UserController;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/', function () {
        return view('client.welcome');
    })->name('welcome');
    Route::get('/products', [MainController::class, 'index'])->name('index');
    Route::get('/products/{category}', [MainController::class, 'category'])->name('category');
    Route::get('/profile', [UserController::class, 'index'])->name('user.index');
    Route::patch('/profile', [UserController::class, 'update'])->name('user.update');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::delete('/{product}', 'destroy')->name('destroy');
        Route::patch('/{product}', 'update')->name('update');
    });
});
