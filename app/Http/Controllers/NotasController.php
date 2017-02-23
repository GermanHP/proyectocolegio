<?php

namespace App\Http\Controllers;

use App\Models\Materiagrado;
use Auth;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotasController extends Controller
{
    public function IngresarNotas($id){

        $materia = Materiagrado::where('id',$id)->where('idMaestroResponsable',Auth::user()->maestros[0]->id)->first();
        if($materia->count()==0){
            return redirect('404');
        }



        $alumnos = DB::table('users')
            ->join('estudiante','estudiante.idUsuario','=','users.id')
            ->join('matriculas','matriculas.idEstudiante','=','estudiante.id')
            ->join('gradoseccion','gradoseccion.id','=','matriculas.idGradoSeccion')
            ->join('materiagrado','materiagrado.idGradoSeccion','=','gradoseccion.id')
            ->where('materiagrado.id',$id)
            ->select('users.nombre','users.apellido','estudiante.id as idEstudiante','users.id')
            ->orderBy('users.apellido','ASC')
            ->get();
        return view('Maestros.Notas.NuevasNotas',compact('materia','alumnos'));
    }

    public function GuardarNotas(Request $request){

    }
}
