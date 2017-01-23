<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AlumnosMiddleware
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
        if(Auth::user()->idTipousuario ==2){
            return redirect('/logout');
        }else if (Auth::user()->idTipousuario ==3){
            return redirect('/logout');
        }else if (Auth::user()->idTipousuario ==4){
            return redirect('/logout');
        }else if (Auth::user()->idTipousuario ==5){
            return redirect('/logout');
        }
        return $next($request);
    }
}
