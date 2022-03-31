<?php

namespace Bsadjetey\UssdSimulator;

use Illuminate\Support\ServiceProvider;

class UssdSimulatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Bsadjetey\UssdSimulator\UssdSimulatorController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'ussdsimulator');
//        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
//        include(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(realpath(__DIR__ . '/routes/web.php'));
        $this->loadViewsFrom(__DIR__.'/views', 'ussdsimulator');
        $this->publishes([ __DIR__.'/views' => base_path('resources/views/bsadjetey/ussdsimulator'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/config.php' => config_path('ussdsimulator.php'),
            ], 'config');
            $this->publishes([
                __DIR__.'/resources/assets' => public_path('ussdsimulator'),
            ], 'assets');

        }
    }
}
