<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class UsuariosMaestrosYAdmin
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
        if(Auth::user()->idTipousuario ==1){
            return redirect('/logout');
        }else if (Auth::user()->idTipousuario ==2){
            return redirect('/logout');
        }

        return $next($request);
    }
}
