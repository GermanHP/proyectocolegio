<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;

class BoletaController extends Controller
{
    public function DescargarBoleta(){


        $pdf = PDF::loadView('main.boleta');
        return $pdf->stream('Orden.pdf');


       /* $view = \View::make('main.boleta')->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteOrdenes.pdf');*/
    }
}
