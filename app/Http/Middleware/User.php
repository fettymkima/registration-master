<?php

namespace App\Http\Middleware;

use App\UserProfile;
use Closure;
use Illuminate\Support\Facades\Auth;

class User
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
        if (Auth::check() && UserProfile::userProfileId() ==8) {
            return $next($request);
        }
        elseif (Auth::check() && UserProfile::userProfileId() ==7)
        {
            return $next($request);

        }
        else
        {
            return redirect('error/response');
        }
    }
}
