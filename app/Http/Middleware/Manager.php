<?php

namespace App\Http\Middleware;

use App\UserProfile;
use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
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
        if (Auth::check() && UserProfile::userProfileId() ==6) {
            return $next($request);
        }
        else
        {
            return redirect('error/response');
        }    }
}
