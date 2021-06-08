<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class sessionSet2
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
        if ($request->session()->exists('user')) {
            // user value found in session
            return redirect('/');
        }
        return $next($request);
    }
}
