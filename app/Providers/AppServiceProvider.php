<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        
        Blade::directive('oredenadoPor', function ($expression) {
            return '
                <?php
                    if($claseOrden["campo"] == "'.$expression.'"){
                        echo e("class=".$claseOrden["clase"]);
                    }
                    echo e(" data-ordenado-por='.$expression.'");
                ?>
            ';
        });
    }

}
