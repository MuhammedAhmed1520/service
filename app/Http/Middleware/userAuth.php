<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class userAuth
{

    public function handle($request, Closure $next, $guard = "web")
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->route('getLoginView');
            }
        }

        return $next($request);
    }
}
