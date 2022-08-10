<?php

namespace Greatatoo\LaravelBasic;

use Illuminate\Support\ServiceProvider;

class LaravelBasicServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'greatatoo');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'greatatoo');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-basic.php', 'laravel-basic');

        // Register the service the package provides.
        $this->app->singleton('laravel-basic', function ($app) {
            return new LaravelBasic;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-basic'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel-basic.php' => config_path('laravel-basic.php'),
        ], 'laravel-basic.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/greatatoo'),
        ], 'laravel-basic.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/greatatoo'),
        ], 'laravel-basic.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/greatatoo'),
        ], 'laravel-basic.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
