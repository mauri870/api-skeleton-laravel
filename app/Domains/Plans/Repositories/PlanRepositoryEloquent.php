<?php

namespace App\Domains\Plans\Repositories;

use App\Domains\Plans\Plan;
use Prettus\Repository\Eloquent\BaseRepository;

class PlanRepositoryEloquent extends BaseRepository implements PlanRepositoryInterface
{
    public function model()
    {
        return Plan::class;
    }
}