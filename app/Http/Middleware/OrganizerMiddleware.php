<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrganizerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('role') !== 'organizer'){
            return redirect()->route('role')->with('error','Access Denied');
        }
        return $next($request);
    }
}
