<?php

namespace App\Providers;

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
        $this->app->bind(
            \App\Repositories\DepartmentRepositoryInterface::class,
            \App\Repositories\DepartmentRepository::class,
        );
        $this->app->bind(
            \App\Repositories\ContactRepositoryInterface::class,
            \App\Repositories\ContactRepository::class,
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
