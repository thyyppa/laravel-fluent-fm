<?php

namespace Hyyppa\LaravelFluentFM\Providers;

use Hyyppa\FluentFM\Connection\FluentFMRepository;
use Illuminate\Support\ServiceProvider;

class LaravelFluentFMServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../config/fluent-fm.php' => config_path('fluent-fm.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/../../config/fluent-fm.php', 'fluent-fm'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(
            'laravel-fluent-fm',
            static function ($app) {
                return new FluentFMRepository($app['config']['fluent-fm']);
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['laravel-fluent-fm'];
    }
}
