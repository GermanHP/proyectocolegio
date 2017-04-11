<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Usuariosbloqueado;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BloquearUsuariosController extends Controller
{
    public function MostrarAlumnos()
    {
        $estudiantes = Estudiante::all();
        return view('Bloqueos.Usuarios', compact('estudiantes'));
    }

    public function BloquearUsuarios($id){
        $estudiante = Estudiante::find($id);
        foreach ($estudiante->padreestudiantes as $padreestudiante){
            $Nbloquear = Usuariosbloqueado::where('idUsuario',$padreestudiante->padredefamilium->user->id)->count();
            if($Nbloquear==0){
                $bloquear = new Usuariosbloqueado();
                $bloquear->fill([
                    "motivoBloqueo"=>"Insolvencia",
                    "idUsuario"=>$padreestudiante->padredefamilium->user->id,
                ]);
                $bloquear->save();
            }
        }
        $bloquear = new Usuariosbloqueado();
        $bloquear->fill([
            "motivoBloqueo"=>"Insolvencia",
            "idUsuario"=>$estudiante->user->id,
        ]);
        $bloquear->save();
        flash('Usuarios Bloqueados exitosamente', 'danger');
        return redirect()->back();
    }

    public function DesBloquearUsuarios($id){
        $estudiante = Estudiante::find($id);
        foreach ($estudiante->padreestudiantes as $padreestudiante){
            $bloqueados = Usuariosbloqueado::where('idUsuario',$padreestudiante->padredefamilium->user->id)->get();
            foreach ($bloqueados as $bloqueado){
                $bloqueado->delete();
            }

        }
        $bloqueado = Usuariosbloqueado::where('idUsuario',$estudiante->user->id)->get();
        foreach ($bloqueado as $item){
            $item->delete();
        }
        flash('Usuarios Desbloqueados exitosamente', 'info');
        return redirect()->back();
    }

    public function Bloqueado(){
        return view('errors.Bloqueado');
    }
}

