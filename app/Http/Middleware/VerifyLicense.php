<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\License;
use Illuminate\Http\Request;

class VerifyLicense
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $license_key=$request>license_key;
        return $next($request);
    }
}
