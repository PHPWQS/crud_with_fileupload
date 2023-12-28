<?php

use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\product\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('', [CategoryController::class, 'index'])->name('category.index');

Route::prefix('categories')->group(function() {
  Route::get('add', [CategoryController::class, 'add'])->name('category.add');
  Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
  Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
 
  Route::post('add', [CategoryController::class, 'store'])->name('category.store');
  Route::post('update/{id}', [CategoryController::class, 'update'])->name('category.update');
});

Route::prefix('products')->group(function() {
  Route::get('', [ProductController::class, 'index'])->name('product.index');
  Route::get('add', [ProductController::class, 'add'])->name('product.add');
  
  Route::post('add', [ProductController::class, 'store'])->name('product.store');
  Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});