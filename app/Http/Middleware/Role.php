<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $userRole = auth()->user()->role;

        // Check for admin role
        if ($role === 'admin' && $userRole === 'admin') {
            return $next($request);
        }

        // Check for client role
        if ($role === 'client' && $userRole === 'client') {
            return $next($request);
        }

        // Check for tax_prepare role
        if ($role === 'tax_prepare' && $userRole === 'tax_prepare') {
            return $next($request);
        }

        // If none of the roles match, redirect with an error message
        return redirect()->back()->with('error', "You don't have the required access.");
    }
}
