<?php

namespace App\Providers;

use App\Repositories\BoilerRoomExpendituresRepository;
use App\Repositories\BoilerRoomPassportRepository;
use App\Repositories\Interfaces\BoilerRoomExpendituresRepositoryInterface;
use App\Repositories\Interfaces\BoilerRoomPassportRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            BoilerRoomPassportRepositoryInterface::class,
            BoilerRoomPassportRepository::class,
        );
        $this->app->bind(
            BoilerRoomExpendituresRepositoryInterface::class,
            BoilerRoomExpendituresRepository::class,
        );
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
