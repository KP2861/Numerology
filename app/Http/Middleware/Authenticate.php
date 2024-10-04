<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
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
        if (! Auth::check()) {
            return redirect()->route('admin.login');
        }

        $user = Auth::user();

        // Check if user role is 1
        if ($user->role == 1) {
            return $next($request);
        }

        // Redirect to a "not authorized" page if user role is not 1
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }
}
