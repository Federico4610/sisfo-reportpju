<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if (Auth::guard('admin')->check()) {
            return redirect('/admin');
        } elseif (Auth::guard('masyarakat')->check()) {
            return redirect('/masyarakat');
        } elseif (Auth::guard('tatausaha')->check()) {
            return redirect('/tatausaha');
        } elseif (Auth::guard('kepala')->check()) {
            return redirect('/kepala');
        }

        return $next($request);
    }
}
