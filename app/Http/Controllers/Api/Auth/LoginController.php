<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $accessLog;

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }

    protected function credentials(Request $request)
    {
        $request->merge([
            'type' => ['normal']
        ]);

        return $request->only($this->username(), 'password', 'type');
    }

    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);

        $user = $this->guard()->user();

        // Delete old tokens
        $user->tokens()->delete();

        $this->authenticated($request, $user);

        return response()->json([
            'token' => $user->createToken($user->getAccessTokenName($request))->plainTextToken,
            'token_type' => 'bearer',
            'user' => new UserResource($user)
        ], Response::HTTP_OK);
    }

    protected function authenticated(Request $request, $user)
    {
        // User is authenticated
    }
}
