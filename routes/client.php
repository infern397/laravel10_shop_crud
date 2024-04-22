<?php

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\MainController;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/', function () {
        return view('client.welcome');
    })->name('welcome');
    Route::get('/products', [MainController::class, 'index'])->name('index');
    Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::delete('/{product}', 'destroy')->name('destroy');
        Route::patch('/{product}', 'update')->name('update');
    });
});
