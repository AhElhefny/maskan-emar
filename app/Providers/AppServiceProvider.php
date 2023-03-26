<?php

namespace App\Providers;

use App\Models\Media;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application vendorSetting.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application vendorSetting.
     *
     * @return void
     */
    public function boot()
    {
        View::share('randomGallery',Media::inRandomOrder()->limit(3)->get());
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
