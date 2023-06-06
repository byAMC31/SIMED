<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectAfterRegistration
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
        $response = $next($request);

        // Check if user was recently registered
        if ($request->session()->get('newUser', false)) {
            // Clear the session value
            $request->session()->forget('newUser');

            // Redirect to the custom route
            return redirect()->route('registrodatos.create');
        }

        return $response;
    }
}

