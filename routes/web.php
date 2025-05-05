<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::resource('product', \App\Http\Controllers\productController::class);
Route::resource('store', \App\Http\Controllers\storeController::class);
