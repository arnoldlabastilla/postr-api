<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validateRequest($request);

        $user = $this->createUser($request->all());

        $this->registered($request, $user);

        return $this->sendResponse($request, $user);
    }

    private function validateRequest($request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'password' => 'required|string|min:5|confirmed'
        ]);
    }

    private function createUser($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => 'normal'
        ]);
    }

    private function registered(Request $request, $user)
    {
        // User is registered
    }

    protected function sendResponse($request, $user)
    {
        return response()->json([
            'token' => $user->createToken($user->getAccessTokenName($request))->plainTextToken,
            'token_type' => 'bearer',
            'user' => new UserResource($user)
        ], Response::HTTP_OK);
    }
}
