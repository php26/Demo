<?php

namespace Pratice\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;
use Pratice\Models\User;

class CheckAdminRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request Request
     * @param \Closure                 $next    Closure
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return $next($request);
        } else if (Auth::check()){
            return redirect('/home');
        } else {
            return redirect('/admin/login');
        }
    }
}
