<?php

namespace App\Providers;

use App\Services\Images\IImageService;
use App\Services\Images\ImageService;
use App\Services\Images\ImageService2;
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
        $this->app->bind(IImageService::class, ImageService::class);
    }
}
