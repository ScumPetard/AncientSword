<?php

namespace App\Providers;

use App\Models\Banner;
use Illuminate\Support\ServiceProvider;

class BannerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('home.layouts.base', function ($view) {
            $banners = Banner::orderBy('sort','desc')->get();
            $view->with('banners',$banners);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
