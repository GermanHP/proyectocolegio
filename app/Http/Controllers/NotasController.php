<?php

namespace App\Http\Controllers;

use App\Models\Materiagrado;
use App\Models\Nota;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mockery\Matcher\Not;

class NotasController extends Controller
{
    public function IngresarNotas($id){

        $materia = Materiagrado::where('id',$id)->where('idMaestroResponsable',Auth::user()->maestros[0]->id)->with(['materium','gradoseccion.matriculas.estudiante.user'=> function($query){
            $query->orderBy('apellido', 'DESC');
        }])->first();
        if($materia->count()==0){
            return redirect('404');
        }

$idM = $id;



        return view('Maestros.Notas.NuevasNotas',compact('materia','idM'));
    }

    public function GuardarNotas($id,Request $request){

        $revision = $request['Revision'];
        $ActividadesComplementarias = $request['ActividadesComplementarias'];
        $ActividadesIntegradoras = $request['ActividadesIntegradoras'];
        $PruebaObjetiva = $request['PruebaObjetiva'];

        $materia = Materiagrado::where('id',$id)->where('idMaestroResponsable',Auth::user()->maestros[0]->id)->with(['materium','gradoseccion.matriculas.estudiante.user'=> function($query){
            $query->orderBy('apellido', 'DESC');
        }])->first();
        $alumnos = $materia->gradoseccion->matriculas;


        if(count($revision)!=count($ActividadesComplementarias) || count($ActividadesComplementarias) !=count($ActividadesIntegradoras)  ||
            count($ActividadesIntegradoras)!= count($PruebaObjetiva) || count($revision)==0 || count($revision) != count($alumnos)){

             flash('ERROR en Datos','danger');
             return redirect()->back();
        }
        $posicion =0;
        foreach ($alumnos as $alumno){

            //Nota Revision
            $notaR = Nota::where('idPeriodos',1)->where('idTipoNota',1)->where('idEstudiante',$alumno->idEstudiante)->where('idMateriaGrado',$id)->get();
           if($notaR->count()==0){
               $notaRevision = new Nota();
               $notaRevision->fill([
                   'nota'=>$revision[$posicion],
                   'year'=>'2017',
                   'idPeriodos'=>1,
                   'idTipoNota'=>1,
                   'idEstudiante'=>$alumno->idEstudiante,
                   'idMateriaGrado'=>$id
               ]);
               $notaRevision->save();

           }else{
               $notaR[0]->fill([
                   'nota'=>$revision[$posicion],
                   'year'=>'2017',
                   'idPeriodos'=>1,
                   'idTipoNota'=>1,
                   'idEstudiante'=>$alumno->idEstudiante,
                   'idMateriaGrado'=>$id
               ]);
               $notaR[0]->save();

                   }

            //Nota Actividades Complementarias
            $notaR = Nota::where('idPeriodos',1)->where('idTipoNota',2)->where('idEstudiante',$alumno->idEstudiante)->where('idMateriaGrado',$id)->get();
            if($notaR->count()==0){
                $notaRevision = new Nota();
                $notaRevision->fill([
                    'nota'=>$ActividadesComplementarias[$posicion],
                    'year'=>'2017',
                    'idPeriodos'=>1,
                    'idTipoNota'=>2,
                    'idEstudiante'=>$alumno->idEstudiante,
                    'idMateriaGrado'=>$id
                ]);
                $notaRevision->save();

            }else {
                $notaR[0]->fill([
                    'nota' => $ActividadesComplementarias[$posicion],
                    'year' => '2017',
                    'idPeriodos' => 1,
                    'idTipoNota' => 2,
                    'idEstudiante' => $alumno->idEstudiante,
                    'idMateriaGrado' => $id
                ]);
                $notaR[0]->save();

            }

                //Nota Actividades Integradoras
                $notaR = Nota::where('idPeriodos',1)->where('idTipoNota',3)->where('idEstudiante',$alumno->idEstudiante)->where('idMateriaGrado',$id)->get();
                if($notaR->count()==0){
                    $notaRevision = new Nota();
                    $notaRevision->fill([
                        'nota'=>$ActividadesIntegradoras[$posicion],
                        'year'=>'2017',
                        'idPeriodos'=>1,
                        'idTipoNota'=>3,
                        'idEstudiante'=>$alumno->idEstudiante,
                        'idMateriaGrado'=>$id
                    ]);
                    $notaRevision->save();

                }else {
                    $notaR[0]->fill([
                        'nota' => $ActividadesIntegradoras[$posicion],
                        'year' => '2017',
                        'idPeriodos' => 1,
                        'idTipoNota' => 3,
                        'idEstudiante' => $alumno->idEstudiante,
                        'idMateriaGrado' => $id
                    ]);
                    $notaR[0]->save();

                }
                    //Nota Prueba Objetiva
                    $notaR = Nota::where('idPeriodos', 1)->where('idTipoNota', 4)->where('idEstudiante', $alumno->idEstudiante)->where('idMateriaGrado', $id)->get();
                    if ($notaR->count() == 0) {
                        $notaRevision = new Nota();
                        $notaRevision->fill([
                            'nota' => $PruebaObjetiva[$posicion],
                            'year' => '2017',
                            'idPeriodos' => 1,
                            'idTipoNota' => 4,
                            'idEstudiante' => $alumno->idEstudiante,
                            'idMateriaGrado' => $id
                        ]);
                        $notaRevision->save();

                    } else {
                        $notaR[0]->fill([
                            'nota' => $PruebaObjetiva[$posicion],
                            'year' => '2017',
                            'idPeriodos' => 1,
                            'idTipoNota' => 4,
                            'idEstudiante' => $alumno->idEstudiante,
                            'idMateriaGrado' => $id
                        ]);
                        $notaR[0]->save();
                        }



            $posicion++;
        }
        flash('Notas Actualizadas Exitosamente','info');
        return redirect()->back();


    }
}
