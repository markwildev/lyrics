<?php

namespace App\Laravel\Middleware\Frontend;

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
        // $guard = session()->get('is_admin','no') == "yes" ? 'admin' : 'partner';
        $guard = "user";
        if (Auth::guard($guard)->check() && auth()->user()->type == "customer") {

            return redirect()->route('frontend.home.index');
        }

        return $next($request);
    }
}
