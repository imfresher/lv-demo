<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContainerServiceProvider extends ServiceProvider
{
    public static $repositories = [
        'Menu',
    ];

    public static $services = [];

    /**
     * Register any repository services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();
        $this->registerServices();
    }

    /**
     * Bootstrap any repository services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register repositories container.
     *
     * @return void
     */
    protected function registerRepositories()
    {
        foreach (static::$repositories as $value) {
            $this->app->singleton(
                'App\Contracts\Repositories\\' . ucfirst($value) . 'Repository',
                'App\Repositories\Eloquent\\' . ucfirst($value) . 'RepositoryEloquent'
            );
        }
    }

    /**
     * Register services container.
     *
     * @return void
     */
    protected function registerServices()
    {
        foreach (static::$services as $value) {
            $this->app->singleton(
                'App\Contracts\Services\\' . ucfirst($value) . 'ServiceInterface',
                'App\Services\\' . ucfirst($value) . 'Service'
            );
        }
    }
}
