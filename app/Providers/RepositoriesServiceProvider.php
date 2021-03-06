<?php

namespace App\Providers;

use App\Repositories\ClipRepository;
use App\Repositories\Interfaces\ClipRepositoryInterface;
use App\Repositories\Interfaces\ThemeRepositoryInterface;
use App\Repositories\ThemeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClipRepositoryInterface::class, ClipRepository::class);
        $this->app->bind(ThemeRepositoryInterface::class, ThemeRepository::class);
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
