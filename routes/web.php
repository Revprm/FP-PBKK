<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/information', function () {
    return view('information', [
        'products' => Product::all(),
    ]);
})->name('information');

Route::get('/information/details/{slug}', function ($slug) {
    $product = Product::where('slug', $slug)->firstOrFail();
    
    return view('details', [
        'product' => $product,
    ]);
});

Route::get('/information/add_page', function () {
    return view('add_page');
});

Route::get('/information/details/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::put('/information/details/{slug}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/information/details/{slug}', [ProductController::class, 'destroy'])->name('products.destroy');