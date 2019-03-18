<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        //
        //todo 2
        Schema::defaultStringLength(191);
        //todo 3 php artisan migrate:fresh
        //liat database
        //todo 4 php artisan make:model Book -m
    }
}
