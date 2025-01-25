<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('ssl.force_ssl')) {
            \URL::forceScheme('https');
        }

        // Apply environment-specific configurations
        config([
            'app.debug' => config('environment.settings.' . app()->environment() . '.debug'),
            'cache.ttl' => config('environment.settings.' . app()->environment() . '.cache_ttl'),
        ]);
    }
}
