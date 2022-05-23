<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\GeneralSetting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrap();

        $categories = Category::take(5)->get();
        View::share('categories', $categories);

        $generalSetting = GeneralSetting::get()->first();
        View::share('generalSetting', $generalSetting);
    }
}
