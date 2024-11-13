<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        // This will check if the user in logged in as admin 
        if ($request->session()->get('role') !== 'admin'){
            return redirect()->route('role')->with('error','Access Denied');
        }
        return $next($request);
    }
}
