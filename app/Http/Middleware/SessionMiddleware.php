<?php

namespace App\Http\Middleware;

use App\Exceptions\SessionException;
use App\Http\Middleware\Traits\InitializesSessionData;
use App\Models\Session as SessionModel;
use Closure;

class SessionMiddleware
{
    use RequestTrait;
    use InitializesSessionData;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \App\Exceptions\SessionException
     */
    public function handle($request, Closure $next)
    {
        $sessionModel = new SessionModel();

        $token = $this->resolveToken($request);

        $session = $sessionModel->getSession($token);

        if (
            empty($session) ||
            !isset($session['session_info'])
        ) {
            throw new SessionException(SessionException::INVALID_SESSION_TOKEN);
        }

        $request->headers->set('x-http-token', $token);

        $this->initSessionData($session['session_info']);

        return $next($request);
    }

    /**
     * Resolve session token from request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     *
     * @throws \App\Exceptions\SessionException
     */
    protected function resolveToken($request): string
    {
        try {
            return $this->extractToken($request);
        } catch (SessionException $e) {
            try {
                return $this->extractCookieToken($request);
            } catch (SessionException $e) {
                throw new SessionException(SessionException::INVALID_SESSION_TOKEN);
            }
        }
    }
}
