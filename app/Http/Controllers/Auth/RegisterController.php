<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct(
        private RegisterService $registerService
    ) {
    }

    public function register(Request $request)
    {
        $account = $this->registerService->register($request->all());

        return response()->json($account);
    }
}
