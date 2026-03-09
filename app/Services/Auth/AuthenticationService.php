<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;
use App\Utils\TokenGenerator;
use App\Exceptions\TokenNotFoundException;

class AuthenticationService
{
    public function __construct(
        private TokenGenerator $tokenGenerator
    ) {
    }

    public function login(array $credentials)
    {
        if (!Auth::attempt($credentials)) {
            return null;
        }

        $user = Auth::user();

        // Generate session token
        $token = $this->tokenGenerator->createUserToken($user, 'api-token');

        return [
            'user' => $user,
            'token' => $token['full']
        ];
    }

    public function logout($user)
    {
        try {
            $user->tokens()->delete();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function session($user)
    {
        return [
            'accounts_id'  => $user->accounts_id,
            'id'           => $user->id,
            'email'        => $user->email,
            'first_name'   => $user->first_name,
            'last_name'    => $user->last_name,
            'account_type' => $user->account_type
        ];
    }
}
