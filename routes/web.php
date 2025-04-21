<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\PerfumesController;

Route::get('/', function () {
    $bestSellers = Product::take(5)->get(); // Get first 5 products (adjust as needed)
    return view('welcome', compact('bestSellers'));
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/perfumes', function () {
    return view('perfumes');
});

Route::get('/bestseller', function () {
    return view('bestseller');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});
use App\Http\Controllers\ProductController;

Route::get('/perfumes', [ProductController::class, 'perfumes']);

