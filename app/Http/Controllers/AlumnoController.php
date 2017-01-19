<?php

namespace App\Http\Controllers;

use App\Models\Materiagrado;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlumnoController extends Controller
{
    public function MisClases(){
        $materias = Materiagrado::where('idGradoSeccion','=',\Auth::user()->estudiantes[0]->matriculas[0]->idGradoSeccion)->get();
        return view('Alumno.Materias',compact('materias'));
    }
}
