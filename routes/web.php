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
        $products = Product::where('user_id', Auth::id())->paginate(10);
        return view('dashboard', compact('products'));
    })->name('dashboard');

    Route::get('/information', function () {
        return view('information', [
            'products' => Product::paginate(10),
        ]);
    })->name('information');

    Route::get('/dashboard/add_page', function () {
        return view('add_page');
    });

    Route::post('/dashboard/add_page', [ProductController::class, 'store'])->name('products.store');

    Route::get('/dashboard/details/{slug}', [ProductController::class, 'show'])->name('products.show');

    Route::put('/dashboard/details/{slug}', [ProductController::class, 'update'], function ($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('details', [
            'product' => $product,
        ]);
    })->name('products.update');

    Route::delete('/dashboard/details/{slug}', [ProductController::class, 'destroy'])->name('products.destroy');
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
