<?php

namespace BinaryCats\PhpStyles;

use Illuminate\Support\ServiceProvider;

class PhpStylesServiceProvider extends ServiceProvider
{
    /**
     * Boot application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../stubs/php_cs.stub' => base_path('.php_cs.dist'),
            ]);
        }
    }
}
