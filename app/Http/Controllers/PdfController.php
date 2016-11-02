<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function crearPdf($datos, $vistaurl, $tipo){
        $data = $datos;
        $date = date('Y-m-d');
        $view = \view::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if($tipo==1){return $pdf->stream('propuesta');}
        if($tipo==2){return $pdf->download('prospecto.pdf');}
    }

    public function crear_prospecto($tipo){

        $vistaurl="matricula.propuesta";

        return $this->crearPdf($vistaurl, $tipo);
    }
}
