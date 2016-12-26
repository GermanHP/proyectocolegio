<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Documento;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Municipio;
use App\Models\Oficio;
use App\Models\Sacramento;
use App\Models\Sacramentousuario;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControllerEstudiante extends Controller
{
    public function ActualizarEstudiante($id){

        $departamentos = Departamento::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $municipios = Municipio::where('id_departamento','=',9)->orderBy('nombre', 'ASC')->lists('nombre', 'id');

        $sacramentosRegistrados = Sacramento::all();
        $documentosR = Documento::all();
        $grados = DB::table('gradoseccion')
            ->join('grados', 'grados.id', '=', 'gradoseccion.idGrado')
            ->join('seccion', 'seccion.id', '=', 'gradoseccion.idSeccion')
            ->select('gradoseccion.id', DB::raw('concat(grados.nombre, " ", seccion.Nombre ) as nombre'))
            ->whereNull('gradoseccion.deleted_at')->lists('nombre', 'id');
        $gradosAntiguos = Grado::all()->lists('nombre','id');

        $oficios = Oficio::orderBy('nombre', 'ASC')->lists('nombre', 'id');


        $estudiante = Estudiante::find($id);
        return view('Estudiante.ActualizarEstudiante',compact('estudiante','departamentos','municipios','grados','gradosAntiguos','oficios','sacramentosRegistrados','documentosR'));

    }

    public function updateEstudiante(Request $request,$id){

    }
}
