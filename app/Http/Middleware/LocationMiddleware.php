<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->exists('lang')){
            session()->put('lang', 'es');
        }
        return $next($request);
    }
}
