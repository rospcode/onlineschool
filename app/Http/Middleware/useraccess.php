<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class useraccess
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
       if(! auth()->check()){
         return redirect('/account/login');
       }else {
         if(auth()->user()->role == "user"){
         return $next($request);
           }
           return redirect('/account/login');
       }
     }
}
