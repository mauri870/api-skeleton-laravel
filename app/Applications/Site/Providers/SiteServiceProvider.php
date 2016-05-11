<?php
namespace App\Applications\Site\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class SiteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes($this->app['router']);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'site');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function registerRoutes(Router $router)
    {
        $router->group(
            ['namespace' => 'App\Applications\Site\Http\Controllers'],
            function () use ($router) {
                require app_path('Applications/Site/Http/routes.php');
            }
        );
    }
}