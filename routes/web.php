<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('single', SingleController::class);