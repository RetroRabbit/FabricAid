<?php

namespace App\Http\Middleware;

use Closure;

class IsArtisan
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
        dd(auth()->user());
        if(!$request->user()->isArtisan())
        {
            if ($request->user()->isAdmin())
                return redirect()->route('admin-dashboard');
            else if ($request->user()->isSupervisor())
                return redirect()->route('supervisor-dashboard');
            else
                return redirect()->route('home-signout');
        }

        return $next($request);
    }
}
