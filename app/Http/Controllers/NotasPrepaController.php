<?php

namespace App\Http\Controllers;

use App\Models\Areasdedesarrollokinder;
use App\Models\Gradoseccion;
use App\Models\Indicadoresdelogro;
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
}
