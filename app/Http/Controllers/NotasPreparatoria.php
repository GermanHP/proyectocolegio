<?php

namespace App\Http\Controllers;

use App\Models\Materiagrado;
use App\Models\Nota;
use App\Models\Regristronotasprepa;
use App\Models\Tiponotaprepa;
use Auth;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use RegistroNotasPrepa;

class NotasPreparatoria extends Controller
{
    public function ingresarNotas($id){
        $materia = Materiagrado::where('id', $id)->where('idMaestroResponsable', Auth::user()->maestros[0]->id)->with(['materium', 'gradoseccion.matriculas.estudiante.user' => function ($query) {
            $query->orderBy('apellido', 'DESC');
        }])->first();
        if ($materia->count() == 0) {
            return redirect('404');
        }

        $idM = $id;
        $notaPrepa = Tiponotaprepa::lists('nota','id');
        $alumnos = DB::table('users')
            ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
            ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
            ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
            ->join('materiagrado', 'materiagrado.idGradoSeccion', '=', 'gradoseccion.id')
            ->where('materiagrado.id',$id)
            ->whereNull('users.deleted_at')
            ->whereNull('gradoseccion.deleted_at')
            ->select('users.nombre','users.apellido','estudiante.id')
            ->orderBy('users.apellido','ASC')
            ->get();


        return view('Maestros.Notas.NuevasNotasPrepa',compact('materia','idM','alumnos','notaPrepa'));
    }

    public function insertNotas(Request $request, $id){
        $revision = $request['notasPrepa'];


        $materia = Materiagrado::where('id',$id)->where('idMaestroResponsable',Auth::user()->maestros[0]->id)->with(['materium','gradoseccion.matriculas.estudiante.user'=> function($query){
            $query->orderBy('apellido', 'DESC');
        }])->first();
        $alumnos = DB::table('users')
            ->join('estudiante', 'estudiante.idUsuario', '=', 'users.id')
            ->join('matriculas', 'matriculas.idEstudiante', '=', 'estudiante.id')
            ->join('gradoseccion', 'gradoseccion.id', '=', 'matriculas.idGradoSeccion')
            ->join('materiagrado', 'materiagrado.idGradoSeccion', '=', 'gradoseccion.id')
            ->where('materiagrado.id',$id)
            ->whereNull('users.deleted_at')
            ->whereNull('gradoseccion.deleted_at')
            ->select('users.nombre','users.apellido','estudiante.id as idEstudiante')
            ->orderBy('users.apellido','ASC')
            ->get();


        if(count($revision)!= count($alumnos)){

            flash('ERROR en Datos','danger');
            return redirect()->back();
        }
        $posicion =0;
        foreach ($alumnos as $alumno){

            //Nota Revision
            $notaR = Regristronotasprepa::where('idPeriodos',1)->where('idTipoNota',5)->where('idEstudiante',$alumno->idEstudiante)->where('idMateriaGrado',$id)->get();
            if($notaR->count()==0){
                $notaRevision = new Regristronotasprepa();
                $notaRevision->fill([
                    'idNota'=>$revision[$posicion],
                    'year'=>'2017',
                    'idPeriodos'=>1,
                    'idTipoNota'=>5,
                    'idEstudiante'=>$alumno->idEstudiante,
                    'idMateriaGrado'=>$id
                ]);
                $notaRevision->save();

            }else{
                $notaR[0]->fill([
                    'idNota'=>$revision[$posicion],
                    'year'=>'2017',
                    'idPeriodos'=>1,
                    'idTipoNota'=>5,
                    'idEstudiante'=>$alumno->idEstudiante,
                    'idMateriaGrado'=>$id
                ]);
                $notaR[0]->save();

            }





            $posicion++;
        }
        flash('Notas Ingresadas', 'info');
        return redirect()->back();

    }
}
