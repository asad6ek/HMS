<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUser
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
        if(Auth::user() and (Auth::user()->isUser() or Auth::user()->isAdmin()))
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }
    }
}
