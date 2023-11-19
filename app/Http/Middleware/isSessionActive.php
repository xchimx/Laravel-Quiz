<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class isSessionActive
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('settings')) {
            if (Session::has('name')) {
                return $next($request);
            }
        } else if ($request->is('quiz')) {
            if (Session::has('rounds')) {
                return $next($request);
            }
        } else if ($request->is('end')) {
            if (Session::has('score')) {
                return $next($request);
            }
        }
        return redirect('/');
    }
}
