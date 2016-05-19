<?php

namespace App\Domains\Users\Repositories;


use App\Domains\Users\User;
use App\Domains\Users\Presenters\UserPresenter;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    public function model()
    {
        return User::class;
    }

    public function presenter()
    {
        return UserPresenter::class;
    }
}