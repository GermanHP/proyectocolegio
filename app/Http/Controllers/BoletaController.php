<?php

namespace App\Http\Controllers;

use App\Models\Datosboletum;
use App\Models\Estudiante;
use App\Models\Gradoseccion;
use App\Models\Periodo;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;

class BoletaController extends Controller
{

    public function MostrarGrados(){
        $gradoSeccion =  Gradoseccion::all();
        return view('Maestros.GradosBoleta',compact('gradoSeccion'));
    }
    public function DescargarBoleta(){
        $alumnos = \App\Models\Estudiante::where('deleted_at',NULL)->with('user','matriculas.gradoseccion','matriculas.gradoseccion.grado','matriculas.gradoseccion.seccion','matriculas.gradoseccion.materiagrados.materium','matriculas.gradoseccion.materiagrados.notas','datosboleta')->get();
        $periodos = Periodo::all();

        $pdf = PDF::loadView('main.boleta',compact('alumnos','periodos'));
        return $pdf->download('Boletas.pdf');


       /* $view = \View::make('main.boleta')->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteOrdenes.pdf');*/
    }

    public function AgregarDatosBoleta($id){
        $gradpSeccion = Gradoseccion::find($id);

        $alumnosDisponibles = DB::table('users')
            ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
            ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
            ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
            ->where('gradoseccion.id',$id)
            ->whereNull('users.deleted_at')
            ->whereNull('gradoseccion.deleted_at')
            ->select('users.nombre','users.apellido','estudiante.id')
            ->orderBy('users.apellido','ASC')
            ->orderBy('users.nombre','ASC')
            ->orderBy('id','DESC')
            ->get();
        $alumnos = DB::table('users')
            ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
            ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
            ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
            ->join('datosboleta','datosboleta.idEstudiante','=','estudiante.id')
            ->where('gradoseccion.id',$id)
            ->whereNull('users.deleted_at')
            ->whereNull('gradoseccion.deleted_at')
            ->where('datosboleta.idPeriodo',1)
            ->select('users.nombre','users.apellido','estudiante.id','datosboleta.Observaciones','datosboleta.porcentajeAsistencia','datosboleta.notaConducta')
            ->orderBy('users.apellido','ASC')
            ->orderBy('users.nombre','ASC')
            ->orderBy('id','DESC')
            ->get();


        if(count($alumnos)==0){
            $alumnos = DB::table('users')
                ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
                ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
                ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
                ->where('gradoseccion.id',$id)
                ->whereNull('users.deleted_at')
                ->whereNull('gradoseccion.deleted_at')
                ->select('users.nombre','users.apellido','estudiante.id')
                ->orderBy('users.apellido','ASC')
                ->orderBy('users.nombre','ASC')
                ->orderBy('id','DESC')
                ->get();
        }


        return view('main.DatosBoleta',compact('gradpSeccion','id','alumnos','alumnosDisponibles'));
    }

    public function GuardarDatosBoleta($id, Request $request){

        $conducta=$request['Conducta'];
        $observaciones = $request['Observaciones'];
        $asistencia = $request['Asistencia'];
        $alumnos = DB::table('users')
            ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
            ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
            ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
            ->where('gradoseccion.id',$id)
            ->whereNull('users.deleted_at')
            ->whereNull('gradoseccion.deleted_at')
            ->select('users.nombre','users.apellido','estudiante.id')
            ->orderBy('users.apellido','ASC')
            ->orderBy('users.nombre','ASC')
            ->orderBy('id','DESC')
            ->get();
        $posicion =0;
        if(count($conducta)==count($observaciones) && count($observaciones)== count($asistencia)&& count($asistencia)==count($alumnos)){
            foreach ($alumnos as $alumno){
                $alumnoExistente = Datosboletum::where('idEstudiante',$alumno->id)->where('idPeriodo',1)->get();
                if($alumnoExistente->count()==0){
                    $datosBoleta = new Datosboletum();
                    $datosBoleta->fill([
                        "Observaciones"=>$observaciones[$posicion],
                        "porcentajeAsistencia"=>$asistencia[$posicion],
                        "notaConducta"=>$conducta[$posicion],
                        "idEstudiante"=>$alumno->id,
                        "idPeriodo"=>1
                    ]);
                    $datosBoleta->save();
                }else{
                    $alumnoExistente[0]->fill([
                        "Observaciones"=>$observaciones[$posicion],
                        "porcentajeAsistencia"=>$asistencia[$posicion],
                        "notaConducta"=>$conducta[$posicion],
                        "idEstudiante"=>$alumno->id,
                        "idPeriodo"=>1
                    ]);
                    $alumnoExistente[0]->save();
                }
                $posicion++;
            }
            flash('Datos Guardados Exitosamente', 'info');
        }else{
            flash('Error al Guardar Datos', 'danger');
        }
        return redirect()->back();
    }
    public function DescargarBoletaGradoo($id){
        $alumnos = Estudiante::where('deleted_at',NULL)->with('user','matriculas.gradoseccion','matriculas.gradoseccion.grado','matriculas.gradoseccion.seccion','matriculas.gradoseccion.materiagrados.materium','matriculas.gradoseccion.materiagrados.notas','datosboleta')->get();
        $periodos = Periodo::all();
        $gradoSeccion = Gradoseccion::find($id);
        $pdf = PDF::loadView('main.BoletaGrado',compact('alumnos','periodos','id'))->setPaper('a3')->setOrientation('portrait')->setOption('margin-bottom', 0);
        return $pdf->download('Boletas_'.$gradoSeccion->grado->nombre.'_'.$gradoSeccion->seccion->nombre.'.pdf');


        /* $view = \View::make('main.BoletaGrado',compact('alumnos','periodos','id'))->render();
         $pdf = \App::make('dompdf.wrapper');
          $pdf->loadHTML($view);

         return $pdf->stream('Boletas.pdf');*/
    }
}
