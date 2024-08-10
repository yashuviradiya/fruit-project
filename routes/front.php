<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;

use Illuminate\Support\Facades\Route;



Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/shop', [FrontController::class, 'shop'])->name('shop');
    Route::get('shopdetail/{slug?}', [FrontController::class, 'shopdetail'])->name('shopdetail');
    Route::get('/cart', [FrontController::class, 'cart'])->name('cart');
    Route::get('/chackout', [FrontController::class, 'chackout'])->name('chackout');
    Route::get('/testimonial', [FrontController::class, 'testimonial'])->name('testimonial');
    Route::get('/page', [FrontController::class, 'page'])->name('page');
    Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
    Route::post('/contact', [FrontController::class, 'contactsubmit'])->name('contactsubmit');
    Route::get('/aboutus',[FrontController::class, 'aboutus'])->name('aboutus');
    Route::get('/privacypolicy',[FrontController::class, 'privacypolicy'])->name('privacypolicy');





});



    Route::get('/get-category/{slug}',[FrontController::class,'categoryslug'])->name('product.category');










