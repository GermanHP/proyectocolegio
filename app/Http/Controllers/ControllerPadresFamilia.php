<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Direccione;
use App\Models\Estadocivil;
use App\Models\Municipio;
use App\Models\Oficio;
use App\Models\Padredefamilium;
use App\Models\Sacramento;
use App\Models\Sacramentousuario;
use App\Models\Telefono;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControllerPadresFamilia extends Controller
{
    public function ActualizarPadre($id){
        $padreDeFamilia = Padredefamilium::find($id);
        $oficios = Oficio::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $departamentos = Departamento::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $municipios = Municipio::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $sacramentosRegistrados = Sacramento::all();
        $estadoCivil = Estadocivil::all();
        return view('PadresDeFamilia.ActualizarPadre',compact('oficios','departamentos', 'municipios','padreDeFamilia','sacramentosRegistrados','estadoCivil'));
    }

    public function UpdatePadre(Requests\RequestActualizarPadreDeFamilia $request, $id){

        $padreActualizar = Padredefamilium::find($id);

        $padreActualizar->user->fill([
            'nombre'=>$request['nombrePadre'],
            'apellido'=>$request['apellidosPadre'],
            'genero'=>$request['generoResponsable'],
            'email'=>$request['correoPadre'],
            'password'=>bcrypt($request['DUIpadre']),
            'idTipousuario'=>2,
        ]);
        $padreActualizar->user->save();


        $padreActualizar->fill([
            'fechaNacimiento'=>$request['fechaNacimientoPadre'],
            'DUI'=>$request['DUIpadre'],
            'nombreLugarTrabajo'=>$request['lugarTrabajoPadre'],
            'idOficio'=>$request['oficiosPadre'],
            'idEstadoCivil'=>$request['estadoCivilPadre']
        ]);

        $padreActualizar->save();

        foreach ($padreActualizar->user->telefonos as $telefono){
            if($telefono->idTipoTelefono==2){
                $telefono->delete();
            }
        }
        if($request['telefonoTrabajoPadre']!=NULL){
            $telefonoPadre = new Telefono();
            $telefonoPadre->fill([
                'telefono'=>$request['telefonoTrabajoPadre'],
                'idTipoTelefono'=>2,
                'idUsuario'=>$padreActualizar->user->id,
            ]);
            $telefonoPadre->save();
        }

        foreach ($padreActualizar->user->direcciones as $direccione) {
            if($direccione->idTipoDireccion==3){
                $direccione->delete();
            }
        }
        if($request['DirecciónPadre']!=NULL){
            $direccioNpadre = new Direccione();
            $direccioNpadre->fill([
                'detalle'=>$request['DirecciónPadre'],
                'idMunicipio'=>$request['municipioTrabajoPadre'],
                'idTipoDireccion'=>3,
                'idUsuario'=>$padreActualizar->user->id
            ]);
            $direccioNpadre->save();
        }

        foreach ($padreActualizar->user->sacramentousuarios as $sacramentousuario){
            $sacramentousuario->delete();
        }
        if(count ($request['sacramentoPadre'])>0){
            foreach ($request['sacramentoPadre'] as $sacramento){
                $sacramentosPadres = new Sacramentousuario();
                $sacramentosPadres->fill([
                    'idSacramento'=>$sacramento,
                    'idUsuario'=>$padreActualizar->user->id,
                ]);
                $sacramentosPadres->save();
            }
        }
        flash('Datos Actualizados con Exito', 'success');
        return redirect()->back();
    }
}
