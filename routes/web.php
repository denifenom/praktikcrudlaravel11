<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ViewBladeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('single', SingleController::class);
Route::get('view', [ViewBladeController::class, 'page_view']);
Route::get('blade', [ViewBladeController::class, 'page_blade']);