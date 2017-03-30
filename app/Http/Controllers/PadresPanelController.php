<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\Estudiante;
use App\Models\Materiagrado;
use App\Models\Nota;
use App\Models\Padredefamilium;
use App\Models\Padreestudiante;
use App\Models\Periodo;
use App\Models\User;
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
            $bitacora = new Bitacora();
            $bitacora->fill([
                'Acccion'=>'BusquedaCredenciales',
                'Otra Informacion'=>'DUI '.$request['DUI']
            ]);
            $bitacora->save();
            flash('Registro no encontrado o cuenta no activada intente más tarde','danger');
            return redirect()->back();
        }
        $bitacora = new Bitacora();
        $bitacora->fill([
            'Acccion'=>'BusquedaCredenciales',
            'Otra Informacion'=>'DUI  '.$request['DUI']
        ]);
        $bitacora->save();
        return view('PadresPanel.CredencialesObtenidas',compact('datos'));

    }

    public function NotasHijoMateria($id,$idHijo){


        $hijoEncontrado=0;
        $userPadre = User::where('id',Auth::user()->id)->get();
        foreach (Auth::user()->padredefamilia[0]->padreestudiantes as $hijos){
            if($hijos->idEstudiante==$idHijo){
                $hijoEncontrado =1;
            }
        }
        if($hijoEncontrado==0){
            return view('errors.404');
        }

        $notas = Nota::where('idMateriaGrado',$id)->where('idEstudiante',$idHijo)->where('year','2017')->get();
        $periodos = Periodo::all();
        return view('Alumno.Notas',compact('notas','periodos'));
    }
}
