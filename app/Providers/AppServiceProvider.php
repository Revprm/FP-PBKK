<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Policies\ProductPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    protected $policies = [
        Product::class => ProductPolicy::class,
    ];
}
