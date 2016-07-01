<?php

namespace App\Tests\Applications\Api;

use App\Domains\Users\User;
use App\Applications\Api\Traits\Rest\ResponseHelpers;
use App\Domains\Users\Repositories\UserRepositoryInterface;

class PaginationTest extends ApiTestCase
{
    use ResponseHelpers;

    private $userRepository;

    private $per_page = 5;
    private $total = 10;

    public function setUp()
    {
        parent::setUp();
        $this->userRepository = app(UserRepositoryInterface::class);
    }

    public function test_pagination_response_from_model()
    {
        factory(User::class, $this->total)->create();

        $paginated = User::paginate($this->per_page);
        $response = json_decode($this->ApiResponse($paginated)->content(), true);

        $this->assertArraySubset(['status_code' => 200, 'total'=>$this->total, 'per_page' => $this->per_page], $response);
        $this->assertEquals(5, count($response['data']));
    }

    public function test_pagination_response_from_repository()
    {
        factory(User::class, $this->total)->create();

        $paginated = $this->userRepository->paginate(5);
        $response = json_decode($this->ApiResponse($paginated)->content(), true);

        $this->assertArraySubset(
            ['status_code' => 200, 'meta' => ['pagination'=>['total' => $this->total, 'per_page' => $this->per_page]]]
            , $response
        );
        $this->assertEquals(5, count($response['data']));
    }
}