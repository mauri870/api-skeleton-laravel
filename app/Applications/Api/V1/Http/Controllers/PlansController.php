<?php

namespace App\Applications\Api\V1\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Core\Traits\Rest\ResponseHelpers;
use App\Domains\Plans\Repositories\PlanRepositoryInterface;

class PlansController extends Controller
{
    use ResponseHelpers;

    /**
     * @var PlanRepositoryInterface
     */
    private $repository;

    public function __construct(PlanRepositoryInterface $repository)
    {

        $this->repository = $repository;
    }

    public function plans()
    {
        return $this->ApiResponse(['data' => $this->repository->all()]);
    }
}
