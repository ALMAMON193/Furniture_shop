<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{

    public function handle(Request $request, Closure $next ,...$roles): Response
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }

        // Determine the user's role
        $userRole = Auth::user()->role;

        // Verify if the user's role is permitted
        if (!in_array($userRole, $roles, true)) {
            abort(403, 'Unauthorized access.');
        }

        // Redirect based on the user's role
        $dashboardRoutes = [
            'admin' => 'admin.dashboard',
            'user' => 'user.dashboard',
        ];

        return isset($dashboardRoutes[$userRole])
            ? redirect()->route($dashboardRoutes[$userRole])
            : redirect()->route('home');
    }
}
