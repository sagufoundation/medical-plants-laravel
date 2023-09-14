<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Response;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('CodeKeras-Signature');

        if ($apiKey !== '12345') {
            return response()->json(['message' => 'Opss...Address not found'], 401);
        }

        return $next($request);
    }
}
