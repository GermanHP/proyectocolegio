<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function home (){
        return view('main.home');
    }

    public function instalacion(){
        return view('instalaciones.instalaciones');
    }

    public function historia(){
        return view('instalaciones.historia');
    }

    public function error404(){
        return view('errors.404');
    }
}
