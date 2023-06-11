<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->url() ) {
        if (auth()->user()) {
            Log::info("Admin " . "[" . auth()->user()->name . "]");
            return $next($request);
        } else {
            Log::info("Admin " . "[ Begona ]");
            return $next($request);
        }
        }
        return $next($request);
    }
}
