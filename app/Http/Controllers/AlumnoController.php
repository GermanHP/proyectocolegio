<?php

namespace App\Http\Controllers;

use App\Models\Materiagrado;
use App\Models\Nota;
use App\Models\Periodo;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlumnoController extends Controller
{
    public function MisClases(){
        $materias = Materiagrado::where('idGradoSeccion','=',\Auth::user()->estudiantes[0]->matriculas[0]->idGradoSeccion)->get();
        return view('Alumno.Materias',compact('materias'));
    }
    public function MisNotas($id){

        $notas = Nota::where('idMateriaGrado',$id)->where('idEstudiante',Auth::user()->estudiantes[0]->id)->where('year','2017')->get();
        $periodos = Periodo::all();
        return view('Alumno.Notas',compact('notas','periodos'));
    }
}
