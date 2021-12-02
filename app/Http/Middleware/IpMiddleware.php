<?php

namespace App\Http\Middleware;

use Closure;

class IpMiddleware
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
        if ($request->ip() != "127.0.0.1") {
            // here instead of checking a single ip address we can do collection of ips
            //address in constant file and check with in_array function
            return redirect('/');
        }

        return $next($request);
    }

}
