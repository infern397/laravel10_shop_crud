<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');
        Route::prefix('categories')->group(function () {
            Route::name('categories.')->group(function () {
                Route::controller(CategoryController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/{category}', 'show')->name('show');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/', 'store')->name('store');
                    Route::get('/{category}/edit', 'edit')->name('edit');
                    Route::patch('/{category}', 'update')->name('update');
                    Route::delete('/{category}', 'destroy')->name('destroy');
                });

            });
        });
    });
});

Route::get('/', function () {
    return view('welcome');
});
