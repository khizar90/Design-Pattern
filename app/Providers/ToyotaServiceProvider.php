<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Toyotas\CarManager;
class ToyotaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind('car-manager', function($app) {
            return new CarManager();
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
