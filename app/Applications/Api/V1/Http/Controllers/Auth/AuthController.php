<?php

namespace App\Applications\Api\V1\Http\Controllers\Auth;

use App\Applications\Api\V1\Http\Requests\Auth\UpdateRequest;
use Illuminate\Http\JsonResponse;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Core\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Applications\Api\Traits\Rest\ResponseHelpers;
use App\Domains\Users\Repositories\UserRepositoryInterface;
use App\Applications\Api\V1\Http\Requests\Auth\RegisterRequest;
use App\Applications\Api\V1\Http\Requests\Auth\AuthenticateRequest;

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
                return $this->ApiResponse('Invalid Credentials', 401);
            }
        } catch (JWTException $e) {
            return $this->ApiResponse('Could not create token', 500);
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
        $fields = array_merge(
            $request->only('name', 'address', 'telephone', 'email', 'password'),
            ['password' => bcrypt($request->get('password'))]
        );

        $user = $this->userRepository->skipPresenter()->create($fields);

        $token = JWTAuth::fromUser($user);

        return $this->ApiResponse(compact('token'));
    }

    /**
     * Return the current authenticated user
     *
     * @return JsonResponse
     */
    public function me()
    {
        return $this->ApiResponse($this->userRepository->find(auth()->user()->id));
    }

    /**
     * Update the current authenticated user profile
     *
     * @return JsonResponse
     */
    public function update(UpdateRequest $request)
    {
        $fields = $request->only(['name', 'email', 'address', 'telephone']);

        $this->userRepository->update($fields, auth()->user()->id);

        return $this->ApiResponse('Profile Updated successfully');
    }

    /**
     * Delete the current authenticated user
     *
     * @return JsonResponse
     */
    public function delete()
    {
        $this->userRepository->delete(auth()->user()->id);

        return $this->okButNoContent();
    }
}
