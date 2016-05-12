<?php

namespace App\Api\V1\Http\Controllers\Auth;

use Dingo\Api\Facade\API;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Core\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Api\V1\Http\Requests\Auth\AuthenticateRequest;
use App\Api\V1\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{
    /**
     * Authenticate a user
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticate(AuthenticateRequest $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    /**
     * Register a new user
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $credentials = $request->only('name', 'email', 'password');

        $user = \App\Domains\Users\User::create($credentials);

        // Todo Send registration email, fire register event, etc

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('token'));
    }

    /**
     * Return success if is authenticated
     *
     * @return mixed
     */
    public function validateToken()
    {
        return API::response()->array(['status' => 'success'])->statusCode(200);
    }
}
