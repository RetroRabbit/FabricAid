<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->user()->isAdmin())
        {
            if ($request->user()->isSupervisor())
                return redirect()->route('supervisor-dashboard');
            else if ($request->user()->isArtisan())
                return redirect()->route('artisan-dashboard');
            else
                return redirect()->route('home-signout');
        }

        return $next($request);
    }
}
