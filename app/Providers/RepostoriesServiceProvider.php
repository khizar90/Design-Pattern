<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\UserInterface;
use App\Repositories\UserRepository;

class RepostoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserInterface::class, UserRepository::class);
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
