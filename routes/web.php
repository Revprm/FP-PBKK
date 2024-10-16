<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Eager load the 'category' and 'user' relationships if applicable
        $products = Product::with(['category', 'user'])->where('user_id', Auth::id())->paginate(5);
        return view('dashboard', compact('products'));
    })->name('dashboard');

    Route::get('/information', function () {
        $productQuery = Product::with(['category', 'user'])->latest(); // Eager load relationships
    
        if (request('search')) {
            $productQuery->where('name', 'like', '%' . request('search') . '%');
        }

        $products = $productQuery->paginate(5);
    
        return view('information', [
            'products' => $products,
        ]);
    })->name('information');

    Route::get('/dashboard/add_page', function () {
        return view('add_page');
    });

    Route::post('/dashboard/add_page', [ProductController::class, 'store'])->name('products.store');

    Route::get('/dashboard/details/{slug}', [ProductController::class, 'show'])->name('products.show');

    Route::put('/dashboard/details/{slug}', [ProductController::class, 'update'], function ($slug) {
        // Eager load relationships when fetching the product by slug
        $product = Product::with(['category', 'user'])->where('slug', $slug)->firstOrFail();
        return view('details', [
            'product' => $product,
        ]);
    })->name('products.update');

    Route::delete('/dashboard/details/{slug}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::get('/information/details/{slug}', function ($slug) {
    // Eager load relationships when fetching the product by slug
    $product = Product::with(['category', 'user'])->where('slug', $slug)->firstOrFail();

    return view('details', [
        'product' => $product,
    ]);
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

