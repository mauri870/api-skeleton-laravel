<?php
namespace App\Applications\Dashboard\Providers;


use App\Applications\Dashboard\Notifications\Notification;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes($this->app['router']);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dashboard');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'Notify', function () {
                return new Notification();
            }
        );
    }

    public function registerRoutes(Router $router)
    {
        $router->group(
            ['namespace' => 'App\Applications\Dashboard\Http\Controllers'],
            function () use ($router) {
                require app_path('Applications/Dashboard/Http/routes.php');
            }
        );
    }
}