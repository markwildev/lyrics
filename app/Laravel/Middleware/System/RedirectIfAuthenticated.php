<?php

namespace App\Laravel\Middleware\System;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $guard = session()->get('is_admin','no') == "yes" ? 'admin' : 'partner';
        if (Auth::guard('user')->check()) {
                     

            return redirect()->route('system.dashboard');
        }

        return $next($request);
    }
}
