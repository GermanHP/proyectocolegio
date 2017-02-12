<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Direccione;
use App\Models\Documento;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Matricula;
use App\Models\Matriculadocumento;
use App\Models\Municipio;
use App\Models\Oficio;
use App\Models\Sacramento;
use App\Models\Sacramentousuario;
use App\Models\Telefono;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControllerEstudiante extends Controller
{
    public function ActualizarEstudiante($id){
        $estudiante = Estudiante::find($id);
        foreach ($estudiante->user->direcciones as $direccion){
            if($direccion->idTipoDireccion == 1){
                $idDepartamento = $direccion->municipio->departamento->id;
            }
        }

        $departamentos = Departamento::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $municipios = Municipio::where('id_departamento','=',$idDepartamento)->orderBy('nombre', 'ASC')->lists('nombre', 'id');
        foreach ($estudiante->user->direcciones as $direccion){
            if($direccion->idTipoDireccion == 4){
                $idDepartamento = $direccion->municipio->departamento->id;
            }
        }

        $municipiosEmergencia = Municipio::where('id_departamento','=',$idDepartamento)->orderBy('nombre', 'ASC')->lists('nombre', 'id');

        $sacramentosRegistrados = Sacramento::all();
        $documentosR = Documento::all();
        $grados = DB::table('gradoseccion')
            ->join('grados', 'grados.id', '=', 'gradoseccion.idGrado')
            ->join('seccion', 'seccion.id', '=', 'gradoseccion.idSeccion')
            ->select('gradoseccion.id', DB::raw('concat(grados.nombre, " ", seccion.Nombre ) as nombre'))
            ->whereNull('gradoseccion.deleted_at')->lists('nombre', 'id');
        $gradosAntiguos = Grado::all()->lists('nombre','id');

        $oficios = Oficio::orderBy('nombre', 'ASC')->lists('nombre', 'id');



        return view('Estudiante.ActualizarEstudiante',compact('estudiante','departamentos','municipios','grados','gradosAntiguos','oficios','sacramentosRegistrados','documentosR','municipiosEmergencia'));

    }

    public function updateEstudiante(Requests\requestActualizarEstudiante $request,$id){

        $estudiante = Estudiante::find($id);

        $estudiante->user->fill([
            'nombre'=>$request['nombreEstudiante'],
            'apellido'=>$request['apellido'],
            'genero'=>$request['generoEstudiante'],
            'email'=>$request['correoEstudiante'],
            'idTipousuario'=>1,
        ]);
        $estudiante->user->save();

        $personaAutorizada=$request['personaAutorizada'];
        if($request['salidaRadio']==1){
            $personaAutorizada =" ";
        }

        $casoEmergencia= $request['CasoEmergenciaNombre'];
        if($casoEmergencia==NULL){
            $casoEmergencia=" ";
        }

        $estudiante->fill([
            'fechaNacimiento'=>$request['fechaNacimientoEstudiante'],
            'parvularia'=>$request['estudioP'],
            'retirada'=>$request['salidaRadio'],
            'PersonaAutorizada'=>$personaAutorizada,
            'PersonaEmergencia'=>$casoEmergencia,
        ]);
        $estudiante->save();

        if($request['lugarNacimiento']!=NULL){
            foreach ($estudiante->user->direcciones as $direccion){
                if($direccion->idTipoDireccion ==1){
                    $direccion->fill([
                        'detalle'=>$request['lugarNacimiento'],
                        'idMunicipio'=>$request['municipio'],
                        'idTipoDireccion'=>1,
                        'idUsuario'=>$estudiante->user->id,
                    ]);
                    $direccion->save();
                }
            }
        }
        if($estudiante->user->sacramentousuarios !=null){
            foreach ($estudiante->user->sacramentousuarios as $sacramentos){
                $sacramentos->delete();
            }
        }

        if($request['sacramentosEstudiante']!=null){
            foreach ($request['sacramentosEstudiante'] as $sacramento){
                $sacramentosEstudiante = new Sacramentousuario();
                $sacramentosEstudiante->fill([
                    'idSacramento'=>$sacramento,
                    'idUsuario'=>$estudiante->user->id,
                ]);
                $sacramentosEstudiante->save();
            }
        }

        if($estudiante->user->telefonos!=null){
            foreach ($estudiante->user->telefonos as $telefono){
                if($telefono->idTipoTelefono==4){
                    $telefono->delete();
                }
            }
        }

        if($request['TelefonoEmergenciaNombre']!=NULL) {
            $telefonoEmergencia = new Telefono();
            $telefonoEmergencia->fill([
                'telefono' => $request['TelefonoEmergenciaNombre'],
                'idTipoTelefono' => 4,
                'idUsuario' => $estudiante->user->id,
            ]);
            $telefonoEmergencia->save();
        }

        if($estudiante->user->direcciones !=null){
            foreach ($estudiante->user->direcciones as $direccion){
                if($direccion->idTipoDireccion ==4){
                    $direccion->fill([
                        'detalle'=>$request['residenciaEstudianteEmergencia'],
                        'idMunicipio'=>$request['municipioVivienda'],
                        'idTipoDireccion'=>4,
                        'idUsuario'=>$estudiante->user->id,
                    ]);
                    $direccion->save();
                }
            }
            foreach ($estudiante->user->direcciones as $direccion){
                if($direccion->idTipoDireccion ==2){
                    $direccion->fill([
                        'detalle'=>$request['residenciaEstudiante'],
                        'idMunicipio'=>$request['municipioVivienda'],
                        'idTipoDireccion'=>2,
                        'idUsuario'=>$estudiante->user->id,
                    ]);
                    $direccion->save();
                }
            }
        }



        $matricula = $estudiante->matriculas[0];
        $observaciones = $request['observacionesMatricula'];
        if($observaciones==NULL){
            $observaciones=" ";
        }
        $matricula->fill([
            'Observaciones'=>$observaciones,
            'idEstudiante'=>$estudiante->id,
            'idGradoSeccion'=>$request['gradoNuevo']
        ]);
        $matricula->save();

        if($matricula->matriculadocumentos !=null){
            foreach ($matricula->matriculadocumentos as $documentoMatricula){
                $documentoMatricula->delete();
            }
        }

        foreach ($request['DocumentosEntregados'] as $documento){
            $DocumentosMatricula = new Matriculadocumento();
            $DocumentosMatricula->fill([
                'idMatricula'=>$matricula->id,
                'idDocumento'=>$documento
            ]);
            $DocumentosMatricula->save();
        }



        flash('Registro actualizado','success');
        return redirect()->back();
    }
}
