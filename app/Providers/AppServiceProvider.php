<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\Config as LaravelConfig;
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
        $this->bootSystemConfig();
    }

    protected function bootSystemConfig()
    {
        $configs = Config::get(['key', 'value']);
        $configs->each(function ($config) {
            LaravelConfig::set('sys.' . $config->key, $config->value);
        });
    }
}
