<?php

namespace App\Exceptions;

use Exception;

class UnauthenticatedException extends Exception
{
    protected $message = 'User is not authenticated.';
    protected $code = 401;

    public function render($request)
    {
    return response()->json([
        'status'    => $this->code,
        'error'     => 'Unauthenticated',
        'message'   => $this->message,
        'timestamp' => now()->timestamp,
    ], $this->code);
    }
}
