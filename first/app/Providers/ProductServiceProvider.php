<?php
/**
 * Created by PhpStorm.
 * User: trungvx
 * Date: 11/9/18
 * Time: 1:21 AM
 */

namespace App\Providers;



use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public $singletons = [
      //  ProductServiceInterface::class => ProductService::class
    ];

    public  function register()
    {
        //echo "ok1";exit();
       // $this->app->singleton(\App\Service\ProductServiceInterface::class, \App\Service\ProductService::class);
    }
}