<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use App\Contracts\EmailService;
use App\Services\SendgridEmailService;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
         $this->app->bind(EmailService::class, SendgridEmailService::class);
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
