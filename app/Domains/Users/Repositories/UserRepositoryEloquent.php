<?php

namespace App\Domains\Users\Repositories;


use App\Domains\Users\Repositories\UserRepositoryInterface;
use App\Domains\Users\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    public function model()
    {
        return User::class;
    }
}