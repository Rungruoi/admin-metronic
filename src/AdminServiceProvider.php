<?php

namespace Scuti\Admin\Metronic;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

        $this->loadViewsFrom(__DIR__.'/views', 'admin');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/'),
            __DIR__.'/public' => base_path('public/'),
        ], "admin-metronic");
    }
}
