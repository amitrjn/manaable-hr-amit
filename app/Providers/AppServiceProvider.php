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
        // Force HTTPS in non-local environments
        if (config('ssl.force_ssl')) {
            \URL::forceScheme('https');
            \URL::forceRootUrl(config('app.url'));
        }

        // Apply environment-specific configurations
        $env = app()->environment();
        config([
            'app.debug' => config('environment.settings.' . $env . '.debug'),
            'cache.ttl' => config('environment.settings.' . $env . '.cache_ttl'),
            'session.secure' => config('environment.settings.' . $env . '.session_secure'),
            'cors.allowed_origins' => config('environment.settings.' . $env . '.cors.allowed_origins'),
            'cors.allowed_methods' => config('environment.settings.' . $env . '.cors.allowed_methods'),
            'cors.allowed_headers' => config('environment.settings.' . $env . '.cors.allowed_headers'),
        ]);
    }
}
