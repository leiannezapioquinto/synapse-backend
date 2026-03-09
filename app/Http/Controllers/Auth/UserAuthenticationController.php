<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\AuthenticationService;
use Illuminate\Http\Request;
use App\Exceptions\UnauthenticatedException;

class UserAuthenticationController extends Controller
{
    protected $service;

    public function __construct(AuthenticationService $service)
    {
        $this->service = $service;
    }

    public function login(Request $request)
    {
        $result = $this->service->login($request->only('email','password'));

        if (!$result) {
            return response()->json(['message'=>'Invalid credentials'],401);
        }

        return response()->json($result);
    }

    public function logout(Request $request)
    {
        $result = $this->service->logout($request->user());

        return response()->json(['success'=> $result]);
    }

    public function me(Request $request)
    {
        return response()->json(
            $this->service->session($request->user())
        );
    }
}
