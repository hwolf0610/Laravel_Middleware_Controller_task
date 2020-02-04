<?php

namespace App\Http\Middleware;

use Closure;

class CheckYear
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
       $year = ['1956','1970','1972'];
       if (array_has($year,$request->year)) {
           return redirect('home');
       }
       return $next($request);
   }
}
