<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

Route::prefix("products")->controller(ProductController::class)->group(function () {
    Route::get("/", "index");
    Route::get("/create", "create");
    Route::get("/{name}/{category?}", "show");
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->group(function () {
    Route::get('/', [CategoryController::class, 'store'])->name("admin.index");
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::get('category/store', [CategoryController::class, 'store'])->name('admin.category.store');

});
