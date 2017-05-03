<?php

namespace App\Http\Controllers;

use App\Models\Areasdedesarrollokinder;
use App\Models\Gradoseccion;
use App\Models\Indicadoresdelogro;
use App\Models\Notaskinder;
use App\Models\Tiponotaprepa;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotasPrepaController extends Controller
{
    public function MostrarAreasDeDesarrollo(){
        $areasDeDesarrollo = Areasdedesarrollokinder::all();
        return view('Kinder.MostrarAreaDeDesarrollo',compact('areasDeDesarrollo'));
    }

    public function NuevosAreasDeDesarrollo(){
        return view('Kinder.NuevaAreaDeDesarrollo');
    }

    public function GuardarAreasDeDesarollo(Request $request){
        $area = new Areasdedesarrollokinder();
        $area->fill([
            "nombre"=>$request['nombre']
        ]);
        $area->save();
        flash('Guardado exitosamente','info');
        return redirect()->back();
    }

    public function EliminarAreaDeDesarrollo($id){
        $area = Areasdedesarrollokinder::find($id);
        if(count($area)>0){
            if(count($area->indicadoresdelogros)==0){
                $area->delete();
                flash('Eliminado Exitosamente','warning');
            }else{
                flash('Error al Eliminar','danger');
            }
        }else{
            flash('Error al Eliminar','danger');
        }
        return redirect()->back();
    }

    public function MostrarIndicadoresDeLogro(){
        $indicadores = Indicadoresdelogro::all();
        return view('Kinder.IndicadoresDeLogro.MostrarIndicadores',compact('indicadores'));
    }

    public function NuevoIndicador(){
        $grados = DB::table('gradoseccion')
            ->join('grados', 'grados.id', '=', 'gradoseccion.idGrado')
            ->join('seccion', 'seccion.id', '=', 'gradoseccion.idSeccion')
            ->select('gradoseccion.id', DB::raw('concat(grados.nombre, " ", seccion.Nombre ) as nombre'))
            ->where('grados.id',1)
            ->orWhere('grados.id',12)
            ->orWhere('grados.id',2)
            ->whereNull('gradoseccion.deleted_at')->lists('nombre', 'id');

        $areas = DB::table('areasdedesarrollokinders')
            ->select('id','nombre')
            ->lists('nombre','id');

        return view('Kinder.IndicadoresDeLogro.NuevoIndicadorDeLogro',compact('grados','areas'));
    }

    public function GuardarNuevoIndicador(Request $request){
        $indicadorExistente = Indicadoresdelogro::where('nombreIndicador',$request['nombre'])->where('idGrado',$request['grados'])->where('idAreaDeDesarrollo',$request['areas'])->count();
        if($indicadorExistente==0){
            $indicador = new Indicadoresdelogro();
            $indicador->fill([
                "nombreIndicador"=>$request['nombre'],
                "idGrado"=>$request['grados'],
                "idAreaDeDesarrollo"=>$request['areas']
            ]);
            $indicador->save();
        }
        flash('Indicador Guardado','success');
        return redirect()->back();
    }

    public function EliminarIndicador($id){
        $indicador = Indicadoresdelogro::find($id);
        if(count($indicador->notaskinders)==0){
            $indicador->delete();
        }
        flash('Eliminado exitosamente', 'warning');
        return redirect()->back();
    }


    public function NotasNuevas($id,$idArea){
        $indicadores = Indicadoresdelogro::where('idGrado',$id)->where('idAreaDeDesarrollo',$idArea)->get();
        $notaPrepa = Tiponotaprepa::all();
        $gradoSeccion = Gradoseccion::find($id);
        $area = Areasdedesarrollokinder::find($idArea);
        $notasIngresadas = Notaskinder::where('idGrado',$id)->where('idPeriodo',1)->get();
        $alumnos = DB::table('users')
            ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
            ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
            ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
            ->join('indicadoresdelogros','indicadoresdelogros.id','=','gradoseccion.id')
            ->where('gradoseccion.id',$id)
            ->where('indicadoresdelogros.idGrado',$id)
            ->whereNull('users.deleted_at')
            ->whereNull('gradoseccion.deleted_at')
            ->select('users.nombre','users.apellido','estudiante.id')
            ->orderBy('users.apellido','ASC')
            ->orderBy('users.nombre','ASC')
            ->orderBy('users.id','ASC')
            ->get();


        return view('Kinder.Notas.NuevasNotasKinder',compact('indicadores','id','idArea','notasIngresadas','alumnos','notaPrepa','gradoSeccion','area'));

    }

    public function GuardarNotas(Request $request,$id,$idArea){
        $indicadores = Indicadoresdelogro::where('idGrado',$id)->where('idAreaDeDesarrollo',$idArea)->get();
        $alumnos = DB::table('users')
            ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
            ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
            ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
            ->join('indicadoresdelogros','indicadoresdelogros.id','=','gradoseccion.id')
            ->where('indicadoresdelogros.idGrado',$id)
            ->whereNull('users.deleted_at')
            ->whereNull('gradoseccion.deleted_at')
            ->select('users.nombre','users.apellido','estudiante.id')
            ->orderBy('users.apellido','ASC')
            ->orderBy('users.nombre','ASC')
            ->orderBy('users.id','ASC')
            ->get();
        $estudiantes = $request['idEstudiante'];
        if(count($estudiantes)==count($alumnos)){
            //echo "OK";
        }

        for($i =0;$i<count($estudiantes);$i++){
            for($j =0; $j<count($indicadores);$j++){
                $notas = $request['nota_'.$indicadores[$j]->id];
                $notasIngresdas = Notaskinder::where('idIndicador',$indicadores[$j]->id)
                    ->where('idEstudiante',$estudiantes[$i])
                    ->where('idPeriodo',1)
                    ->where('idGrado',$id)
                    ->first();
                if(count($notasIngresdas)==0){
                    $notaPrepa = new Notaskinder();
                    $notaPrepa->fill([
                        "idGrado"=>$id,
                        "idIndicador"=>$indicadores[$j]->id,
                        "idEstudiante"=>$estudiantes[$i],
                        "idPeriodo"=>1,
                        "idTipoNotaPrepa"=>$notas[$i]
                    ]);
                    $notaPrepa->save();
                }else{
                    $notasIngresdas->fill([
                        "idTipoNotaPrepa"=>$notas[$i]
                    ]);
                    $notasIngresdas->save();
                }

            }

        }
        flash('Notas Actualizasdas Exitosamente','success');
        return redirect()->back();


    }


    public function SeleccionarAreaKinder(){
        $indicadores = Areasdedesarrollokinder::all();
        $gradoseccion = Gradoseccion::where('id',1)->orWhere('id',13)->orWhere('id',14)->get();

        return view('Kinder.SeleccionarAreaKinder',compact('indicadores','gradoseccion'));
    }
}
