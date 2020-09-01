<?php

namespace App\Providers;

use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;
use Illuminate\Support\ServiceProvider;

class InstagramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InstagramBasicDisplay::class, function ($app) {
            return new InstagramBasicDisplay(config('instagram.config'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
