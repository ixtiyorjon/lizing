<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Lang
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
        if(Session::has('lang')){
            $lang = Session::get('lang');
        }
        else{
            $lang = 'ru';
        }
        \App::setlocale($lang);
        return $next($request);
    }
}
