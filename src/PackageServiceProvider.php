<?php

namespace Internetguru\BladeComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'package');

        // Register all components in the components directory
        Blade::componentNamespace('Vendor\\BladeComponents\\View\\Components', 'ig');

        $this->publishes([
            __DIR__ . '/../resources/assets/sass' => resource_path('sass/vendor/internetguru/blade-components'),
        ], 'sass');
    }

    public function register()
    {
        // Register package services
    }
}
