<?php
/**
 * Created by PhpStorm.
 * User: Todociber
 * Date: 11/04/2017
 * Time: 12:38 AM
 */

namespace App\Utilities;


use App\Models\Usuariosbloqueado;

class UsuariosBloqueadosUtils
{
    public function UsuariosBloqueados($id){
        $bloqueados = Usuariosbloqueado::where('idUsuario',$id)->whereNull('deleted_at')->count();
        if($bloqueados==0){
            return false;
        }else{
            return true;
        }
    }
}