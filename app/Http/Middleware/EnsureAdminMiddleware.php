<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

//        dd('test');
        if ($request->user()->role != 'admin') {
            abort(403, "Area Restricted. Only for Admin");
        }
        return $next($request);
    }
}
