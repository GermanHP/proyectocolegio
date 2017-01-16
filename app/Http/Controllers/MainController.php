<?php

namespace App\Http\Controllers;

use Cookie;
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
}
