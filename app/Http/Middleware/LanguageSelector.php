<?php

namespace App\Http\Middleware;

use Closure;

class LanguageSelector
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
        $ip_address = '115.133.247.12';
        $country_array = file_get_contents('http://ip-api.com/json/'.$ip_address);
        $country = json_decode($country_array,true)['country'];
        echo('<h1 style="text-align:center">Sup Bro from '.$country.'</h1>');
        return $next($request);
    }
}
