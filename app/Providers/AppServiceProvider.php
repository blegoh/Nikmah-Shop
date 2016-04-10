<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        view()->share('categories', $categories);
        view()->share('suppliers', $suppliers);
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
