<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

Route::resource('category', CategoryController::class);
Route::get('category/{category}',[CategoryController::class,'delete'])->name('category.delete');
Route::resource('subcategory', SubCategoryController::class);
Route::get('subcategory/{subcategory}',[SubCategoryController::class,'delete'])->name('subcategory.delete');

Route::get('/settings',[SettingController::class,'edit'])->name('setting.edit');
Route::post('/settings',[SettingController::class,'update'])->name('setting.update');




Route::resource('product',ProductController::class);
Route::get('product/{product}',[ProductController::class,'delete'])->name('product.delete');
Route::get('getsubcategory',[ProductController::class,'getsubcategory'])->name('getsubcategory');




});
