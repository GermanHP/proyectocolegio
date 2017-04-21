<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Cookie;
use Estudiante;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function home (){
        //Borrar Cookie de Moodle
        //setcookie("MoodleSession", "Todociber", time()-80600, "/", ".colegiosjb.net", 1);
   return view('main.home');
    }

    public function instalacion(){
        return view('instalaciones.instalaciones');
    }

    public function galery(){
        return view('main.galeria');
    }

    public function historia(){
        return view('instalaciones.historia');
    }

    public function error404(){
        return view('errors.404');
    }

    public function dash_admin(){
        return view('admin.dash_admin');
    }

    public function calendar(){
        return view('includes.calendario');
    }

    public function ingresar(){

        $alumnos = \App\Models\Estudiante::where('deleted_at',NULL)->with('user','matriculas.gradoseccion.grado','matriculas.gradoseccion.seccion','matriculas.gradoseccion.materiagrados.materium','matriculas.gradoseccion.materiagrados.notas','datosboleta')->get();
        $periodos = Periodo::all();
        return view('main.boleta',compact('periodos','alumnos'));
    }

    public function verBoleta(){
        return view('main.boletatest');
    }
}
