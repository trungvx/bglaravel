<?php

namespace App\Providers;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Service\ProductServiceInterface;
use App\Service\ProductService;
use App\Repositories\ProductRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(ProductRepositoryInterface::class, function(){
            return new ProductRepository(new Product(), 12);
        });
    }
}
