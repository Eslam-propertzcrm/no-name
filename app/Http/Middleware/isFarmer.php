<?php

namespace App\Http\Middleware;

use Closure;

class isFarmer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->type != 3) {
            return back();
        }
        return $next($request);
    }
}
