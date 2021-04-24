<?php declare(strict_types=1);

namespace AFink\BladeTablericons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeTablericonsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-tablericons'),
            ], 'blade-tablericons');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->callAfterResolving(Factory::class, function(Factory $factory){
            $factory->add('tablericons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'tablericon',
            ]);
        });
    }
}