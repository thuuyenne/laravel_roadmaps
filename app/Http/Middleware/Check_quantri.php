<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Check_quantri
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
        if(Auth::check())
            if(Auth::user()->id_role == 1 || Auth::user()->id_role == 2)
            return $next($request);
        else 
        return redirect()->route('logout');
        
    }
}
