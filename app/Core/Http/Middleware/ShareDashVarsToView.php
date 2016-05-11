<?php

namespace App\Core\Http\Middleware;

use App\Entities\User;
use Closure;

class ShareDashVarsToView
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
        if(auth()->check()){
            view()->share('user', auth()->user()->name);
            view()->share('notifications',auth()->user()->notifications()->orderBy('id','desc')->take(10)->get());
        }

        return $next($request);
    }
}
