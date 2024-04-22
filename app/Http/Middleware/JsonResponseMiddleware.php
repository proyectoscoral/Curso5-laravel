<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->wantsJson() || $request->expectsJson()) {
            $response = $response->setContent(
                json_encode($response->original)
            )->header('Content-Type', 'application/json');
        }

        return $response;
    }
}
