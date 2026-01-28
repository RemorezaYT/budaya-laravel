<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequireLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
