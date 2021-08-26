<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Repositories\OrderRepository;
use App\Services\OrderService;
use App\Repositories\ProductRepository;
use App\Services\ProductService;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $this->app->bind(OrderRepository::class, OrderService::class);
        $this->app->bind(ProductRepository::class, ProductService::class);
    }
}
