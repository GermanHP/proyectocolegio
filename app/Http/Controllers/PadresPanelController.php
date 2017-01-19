<?php

namespace App\Http\Controllers;

use App\Models\Padreestudiante;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PadresPanelController extends Controller
{
    public function Hijos(){

        $hijos = Padreestudiante::where('idPadre','=',Auth::user()->padredefamilia[0]->id)->get();
        return view('PadresPanel.MostrarHijos',compact('hijos'));
    }
}
