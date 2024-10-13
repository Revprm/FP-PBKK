<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/information', function () {
    return view('information', [
        'products' => Product::all(),
    ]);
});

Route::get('/information/details', function () {
    return view('details');
});

Route::get('/information/add_page', function () {
    return view('add_page');
});

Route::get('/information/details/edit', function () {
    return view('details');
});