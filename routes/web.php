<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("products")->controller(ProductController::class) ->group(function(){
    Route::get("/", "index");
    Route::get("/create","create");
    Route::get("/{name}/{category?}","show");
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/", [HomeController::class], 'welcom');