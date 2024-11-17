<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginError
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('error_admin') || $request->session()->has('error_organizer')) {
            return redirect()->route('error.page'); // Redirects to an error page if there's a login error
        }

        return $next($request);
    }
}