<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            $user = \auth()->user();
            switch ($user->type) {
                case '0':
                    return redirect('/user'); //ادمن
                    break;
                case '1':
                    return redirect('/galleryProduct'); // مندوب
                    break;
                case '2':
                    return redirect('/dealerProductGallery'); //  تاجر
                    break;
                case '3':
                    return redirect('/farmerProduct'); // مزارع
                    break;
                case '4':
                    return redirect('/listDealerOrder'); // كول سنتر
                    break;
            }

        }

        return $next($request);
    }
}
