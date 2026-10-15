<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::redirect('/', '/home');
Route::get('/home', function () {
    return view('home.home');
})->name('home');

//Product
Route::resource('products', ProductController::class);
