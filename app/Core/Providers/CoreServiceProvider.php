<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\Users\Repositories\UserRepositoryInterface;
use App\Domains\Users\Repositories\UserRepositoryEloquent;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepositoryEloquent::class);
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
}
