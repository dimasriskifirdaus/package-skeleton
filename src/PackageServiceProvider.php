<?php

namespace PackageSkeleton;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'package-skeleton');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Publish assets
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/package-skeleton'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/package-skeleton'),
        ], 'package-skeleton');

        // Publish migrations
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'package-skeleton-migrations');
    }

    public function register()
    {
        // Register any bindings or services
    }
}