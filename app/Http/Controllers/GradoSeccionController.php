<?php

namespace App\Http\Controllers;

use App\Models\Gradoseccion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GradoSeccionController extends Controller
{
    public function GradosActivos(){
        $gradoSeccion = Gradoseccion::all();
        return view('Grados.MostrarGrados',compact('gradoSeccion'));
    }

    public function DesactivarGrado($id){
        $gradoSeccion = Gradoseccion::find($id);
        if($gradoSeccion->matriculas->count()>0){
            flash('Tiene Estudiantes activos imposible deshabilitar este grado','danger');
            return redirect()->back();
        }

        $gradoSeccion->delete();
        flash('Grado deshabilitado','danger');
        return redirect()->back();
    }
}
