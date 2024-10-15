<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/information', function () {
        return view('information', [
            'products' => Product::paginate(10), 
        ]);
    })->name('information');

    // Add more protected routes here
});

Route::get('/information/details/{slug}', function ($slug) {
    $product = Product::where('slug', $slug)->firstOrFail();
    
    return view('details', [
        'product' => $product,
    ]);
});

Route::get('/information/add_page', function () {
    return view('add_page');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::post('/information/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/information/details/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::put('/information/details/{slug}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/information/details/{slug}', [ProductController::class, 'destroy'])->name('products.destroy');