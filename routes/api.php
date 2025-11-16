<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/test', function () {
    return "Hello World";
});

// Return all products
Route::get('/products', function () {
    return Product::all();
});
