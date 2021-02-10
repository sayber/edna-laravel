<?php

namespace Sayber\Edna;

use Illuminate\Support\ServiceProvider;

/**
 * Class EdnaApiProvider
 * @package Sayber\Edna
 */
class EdnaApiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Sayber\Edna\Controllers\EdnaCallbackController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        include __DIR__ . '/../routes/api.php';

        $this->publishes([
            __DIR__.'/../config/edna.php' => config_path('edna.php'),
        ]);
    }
}
