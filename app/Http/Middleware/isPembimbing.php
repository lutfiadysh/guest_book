<?php

namespace App\Http\Middleware;

use Closure;

class isPembimbing
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
        if (!Auth::check()) 
        return redirect('/');

        $user = Auth::user();

        if($user->role == "pembimbing")
            return $next($request);

        foreach($roles as $role) {
            if($user->hasRole($role))
                return $next($request);
        }

    return redirect('/');
    }
}
