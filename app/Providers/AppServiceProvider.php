<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ServiceCategory;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('front.layout.header',function($view){
            $categories=ServiceCategory::get()->all();
            $view->with('categories',$categories);
            });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
