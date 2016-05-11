<?php

namespace App\Core\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckTokenExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (count(DB::table('password_resets')->where(['token' => $request->token])->get()) == 0) {
            throw new NotFoundHttpException();
        }

        return $next($request);
    }
}
