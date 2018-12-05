<?php

namespace almod90\JsonResponse;

use Illuminate\Support\ServiceProvider;

class JsonResponseProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('json-response', function() {
            return new Json();
        });
    }

    public function provides()
    {
        return ['json-response'];
    }
}
