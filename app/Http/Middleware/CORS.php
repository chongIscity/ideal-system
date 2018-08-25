<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
        $trusted_domain = [
            "http://localhost:4200"
        ];

        if(isset($request->server()['HTTP_ORIGIN'])){
            $origin = $request->server()['HTTP_ORIGIN'];
            if(in_array($origin,$trusted_domain)){
                header('Access-Control-Allow-Origin:'.$origin);
                header('Access-Control-Allow-Headers:Origin, Content-Type');
                return $next($request);
            }
        }
    }
}
