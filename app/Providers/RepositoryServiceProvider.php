<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\LocationRepositoryInterface;
use App\Repositories\LocationRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LocationRepositoryInterface::class, LocationRepository::class);
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
