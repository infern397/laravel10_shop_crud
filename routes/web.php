<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
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
                    Route::get('/create', 'create')->name('create');
                    Route::get('/{category}', 'show')->name('show');
                    Route::post('/', 'store')->name('store');
                    Route::get('/{category}/edit', 'edit')->name('edit');
                    Route::patch('/{category}', 'update')->name('update');
                    Route::delete('/{category}', 'destroy')->name('destroy');
                });

            });
        });
        Route::prefix('products')->group(function () {
           Route::name('products.')->group(function () {
              Route::controller(ProductController::class)->group(function () {
                  Route::get('/', 'index')->name('index');
                  Route::get('/create', 'create')->name('create');
                  Route::post('/', 'store')->name('store');
                  Route::get('/{product}/edit', 'edit')->name('edit');
                  Route::get('/{product}', 'show')->name('show');
                  Route::patch('/{product}', 'update')->name('update');
                  Route::delete('/{product}', 'destroy')->name('destroy');
              });
           });
        });
        Route::prefix('orders')->group(function () {
           Route::name('orders.')->group(function () {
              Route::controller(OrderController::class)->group(function () {
                  Route::get('/', 'index')->name('index');
                  Route::get('/create', 'create')->name('create');
                  Route::post('/', 'store')->name('store');
                  Route::get('/{order}/edit', 'edit')->name('edit');
                  Route::get('/{order}', 'show')->name('show');
                  Route::patch('/{order}', 'update')->name('update');
                  Route::delete('/{order}', 'destroy')->name('destroy');
                  Route::prefix('{order}/products')->group(function () {
                      Route::name('products.')->group(function () {
                          Route::post('{product}', 'addProduct')->name('store');
                          Route::delete('{product}', 'removeProduct')->name('destroy');
                          Route::patch('{product}', 'updateProduct')->name('update');
                      });
                  });
              });
           });
        });
    });
});

Route::get('/', function () {
    return view('welcome');
});
