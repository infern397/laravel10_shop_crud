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

    Route::middleware(['auth', 'verified'])->prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::patch('/', [UserController::class, 'update'])->name('update');
    });


    Route::middleware(['auth', 'verified'])->prefix('order')->name('order.')->group(function () {
        Route::get('/create', [OrderController::class, 'create'])->name('create');
        Route::get('/', [OrderController::class, 'list'])->name('list');
        Route::get('/{order}', [OrderController::class, 'index'])->name('index');
        Route::post('/', [OrderController::class, 'store'])->name('store');
    });

    Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::delete('/{product}', 'destroy')->name('destroy');
        Route::patch('/{product}', 'update')->name('update');
    });
});
