<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\View\View;
use View;
use App\Models\Category;

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
         View::composer('website.master', function ($view){
            $view->with('categories', Category::all());
         });
    }
}
