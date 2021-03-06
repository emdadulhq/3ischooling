<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->type == 0 ) {
                return redirect(RouteServiceProvider::HOME);
            }elseif(Auth::guard($guard)->check() && Auth::user()->type == 1 ){
                return redirect(RouteServiceProvider::ADMIN);
            }
        }

        return $next($request);
    }
}
