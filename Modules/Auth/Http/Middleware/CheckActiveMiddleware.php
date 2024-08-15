<?php

namespace Modules\Auth\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckActiveMiddleware
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
        if (auth()->check() && ((auth()->user()->is_verified() && auth()->user()->is_active()) || auth()->user()->is_staff())) {
            return $next($request);
        }
        return redirect(route('profile'));
    }
}
