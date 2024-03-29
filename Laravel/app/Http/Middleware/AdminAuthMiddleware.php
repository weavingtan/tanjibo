<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard=null)
    {

        if(\Auth::guard($guard)->guest()){
            if($request->ajax()|| $request->wantsJson()){
                return response('401');
            }else{
                return redirect()->guest('admin/login');
            }
        }
        return $next($request);
    }
}
