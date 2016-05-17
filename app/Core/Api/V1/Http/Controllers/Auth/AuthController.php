<?php

namespace App\Core\Api\V1\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Core\Traits\ResponseHelpers;
use App\Core\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Core\Api\V1\Http\Requests\Auth\RegisterRequest;
use App\Core\Api\V1\Http\Requests\Auth\AuthenticateRequest;
use App\Domains\Users\Repositories\UserRepositoryInterface;

class AuthController extends Controller
{
    use ResponseHelpers;
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {

        $this->userRepository = $userRepository;
    }

    /**
     * Authenticate a user
     *
     * @param AuthenticateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticate(AuthenticateRequest $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return $this->ApiResponse('invalid_credentials', 401);
            }
        } catch (JWTException $e) {
            return $this->ApiResponse('could_not_create_token', 500);
        }

        return $this->ApiResponse(compact('token'));
    }

    /**
     * Register a new user
     *
     * @param RegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $fields = $request->only('name', 'company_name', 'cnpj', 'address', 'city', 'telephone', 'email', 'password');

        $user = $this->userRepository->create($fields);

        // Todo Send registration email, fire register event, etc

        $token = JWTAuth::fromUser($user);

        return $this->ApiResponse(compact('token'));
    }

    /**
     * Return success if is authenticated
     *
     * @return mixed
     */
    public function validateToken()
    {
        return $this->ApiResponse();
    }
}
