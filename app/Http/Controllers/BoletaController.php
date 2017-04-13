<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Periodo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;

class BoletaController extends Controller
{
    public function DescargarBoleta(){
        $alumnos = \App\Models\Estudiante::where('deleted_at',NULL)->with('user','matriculas.gradoseccion.materiagrados.materium','matriculas.gradoseccion.materiagrados.notas')->get();
        $periodos = Periodo::all();

        $pdf = PDF::loadView('main.boleta',compact('alumnos','periodos'));
        return $pdf->download('Boletas.pdf');


       /* $view = \View::make('main.boleta')->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteOrdenes.pdf');*/
    }
}
