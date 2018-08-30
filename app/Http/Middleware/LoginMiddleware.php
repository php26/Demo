<?php

namespace Pratice\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class LoginMiddleware
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
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return $next($request);
        } else if (Auth::check()){
            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }
}
