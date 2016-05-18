<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\Plans\Repositories\PlanRepositoryEloquent;
use App\Domains\Users\Repositories\UserRepositoryEloquent;
use App\Domains\Users\Repositories\UserRepositoryInterface;
use App\Domains\Plans\Repositories\PlanRepositoryInterface;

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
        $this->app->bind(PlanRepositoryInterface::class, PlanRepositoryEloquent::class);
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
