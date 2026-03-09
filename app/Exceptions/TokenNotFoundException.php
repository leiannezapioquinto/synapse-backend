<?php

namespace App\Exceptions;

use Exception;

class TokenNotFoundException extends Exception
{
    protected $message = 'No active token found for the user.';
    protected $code = 404;

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
