<?php

namespace Azibom\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Azibom\Timezones\TimezonesController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/azibom/timezones'),
        ]);
    }
}
