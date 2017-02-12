<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Materiagrado;
use App\Models\Padredefamilium;
use App\Models\Padreestudiante;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PadresPanelController extends Controller
{
    public function Hijos(){

        $hijos = Padreestudiante::where('idPadre','=',Auth::user()->padredefamilia[0]->id)->get();
        return view('PadresPanel.MostrarHijos',compact('hijos'));
    }

    public function MateriasHijo($id){
        $estudiante  = Estudiante::find($id);
        $padreEstudiante = Padreestudiante::where('idEstudiante','=',$id)->where('idPadre','=',Auth::user()->padredefamilia[0]->id)->count();
        if($padreEstudiante>0){
            $materias = Materiagrado::where('idGradoSeccion','=',$estudiante->matriculas[0]->idGradoSeccion)->get();
            return view('PadresPanel.MateriasPorHijo',compact('materias','estudiante'));
        }
       else{
            return view('errors.404');
       }
    }

    public function Credenciales(){
        return view('PadresPanel.MostrarCredenciales');
    }
    public function DatosLogin(Request $request){
        $datos = Padredefamilium::where('DUI',$request['DUI'])->get();
        if($datos->count()==0){
            flash('Registro no encontrado o cuenta no activada intente más tarde','danger');
            return redirect()->back();
        }
        return view('PadresPanel.CredencialesObtenidas',compact('datos'));

    }
}
