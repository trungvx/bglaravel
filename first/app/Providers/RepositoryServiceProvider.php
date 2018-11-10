<?php
/**
 * Created by PhpStorm.
 * User: trungvx
 * Date: 11/9/18
 * Time: 1:21 AM
 */

namespace App\Providers;



use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $singletons = [
       //ProductRepositoryInterface::class => ProductRepository::class
    ];

    public function boot(){
        //
    }

    public  function register()
    {
        //echo "ok1";exit();
        //$this->app->singleton(\App\Repositories\ProductRepositoryInterface::class, \App\Repositories\ProductRepository::class);
    }

}