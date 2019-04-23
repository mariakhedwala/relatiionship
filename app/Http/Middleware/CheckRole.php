<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if ($request->role->role === 'Admin') {
            redirect('role/{role}');
            // echo $request->role->role;
        } else {
            echo $request->role->role ." not permitted";
            exit();
        }
        return $next($request);
    }
}
