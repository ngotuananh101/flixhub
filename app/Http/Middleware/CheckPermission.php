<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        $routeName = $request->route()->getName();

        // If user has role super admin then allow access to all routes
        if ($user->hasRole('super-admin')) {
            return $next($request);
        }

        // Check if user has permission to access the route
        if (!$user->can($routeName)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
