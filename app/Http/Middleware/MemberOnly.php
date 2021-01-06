<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MemberOnly
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
        
        $status = Auth::user();

        if ($status == null){
            abort(403);
        }

        $role_id = Auth::user()->role_id;

       
        
        if ($role_id != 2 ) {
            abort(403);
        }
        
        return $next($request);
    }
}
