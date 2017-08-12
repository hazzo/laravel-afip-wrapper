<?php
namespace hazzo\LaravelAfipWrapper\Providers;

use hazzo\LaravelAfipWrapper\AfipWs;
use Illuminate\Support\ServiceProvider;

class AfipWsServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config.php' => config_path('afipWs.php'),
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AfipWs::class, function ($app) {
            return new AfipWs();
        });
    }

}