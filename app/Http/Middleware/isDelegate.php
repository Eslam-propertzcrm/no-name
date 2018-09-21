<?php

namespace App\Http\Middleware;

use Closure;

class isDelegate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->type != 1) {
            return back();
        }
        return $next($request);
    }
}
