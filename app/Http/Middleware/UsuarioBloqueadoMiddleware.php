<?php

namespace App\Http\Middleware;

use App\Utilities\UsuariosBloqueadosUtils;
use Closure;

class UsuarioBloqueadoMiddleware
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
        $bloqueo = new UsuariosBloqueadosUtils();
        if($bloqueo->UsuariosBloqueados(\Auth::user()->id)){
            return redirect('/Bloqueado');
        }
        return $next($request);
    }
}
