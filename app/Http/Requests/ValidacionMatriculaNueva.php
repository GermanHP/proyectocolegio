<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidacionMatriculaNueva extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *    arrayunique:clientes,dui|size:9|regex:/^([0-9])+$/i',

     */
    public function rules()
    {
        return [
            'nombreEstudiante'=>'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellido'=>'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'correoEstudiante'=>'email',
            'lugarNacimiento'=>'required',
            'departamento' => 'required|exists:departamentos,id',
            'municipio' => 'required|exists:municipios,id',
            'fechaNacimientoEstudiante' => 'required|date',
            'gradoNuevo'=>'required|exists:gradoseccion,id',
            'sacramentosEstudiante'=> 'array|exists:sacramento,id',
            'estudioP'=>'required|numeric|between:1,2',
            'repeatG'=>'required|numeric|between:1,2',
            'DireccionEstudiante'=>'string',
            'municipioVivienda'=>'required|exists:municipios,id',
            'enfermedadRadio'=>'required|numeric|between:1,2',

            'salidaRadio'=>'required|numeric|between:1,2',
            'personaAutorizada'=>'string',
            'CasoEmergenciaNombre'=>'string',
            'residenciaEstudianteEmergencia'=>'string',
            'TelefonoEmergenciaNombre'=>'numeric|digits:8|min:0|integer',
            'gradoAnterior'=>'exists:grados,id',
            'NombreEscuelaAnterior'=>'string',
            'DocumentosEntregados'=>'array|exists:documentos,id',
            'observacionesMatricula'=>'string',


            'nombrePadre'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellidosPadre'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'correoPadre'=>'email',
            'DUIpadre'=>'unique:padredefamilia,DUI|size:9|regex:/^([0-9])+$/i',
            'fechaNacimientoPadre'=>'date',
            'oficiosPadre'=>'exists:oficios,id',
            'lugarTrabajoPadre'=>'string',
            'telefonoTrabajoPadre'=>'numeric|digits:8|min:0|integer',
            'municipioTrabajoPadre'=>'exists:municipios,id',
            'DirecciónPadre'=>'string',
            'sacramentosPadre'=>'array|exists:sacramento,id',
            'estadoCivilPadre'=>'exists:estadocivil,id',


            'nombreMadre'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellidoMadre'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'correoMadre'=>'email',
            'DUIMadre'=>'unique:padredefamilia,DUI|size:9|regex:/^([0-9])+$/i',
            'fechaNacimientoMadre'=>'date',
            'oficioMadre'=>'exists:oficios,id',
            'lugarTrabajoMadre'=>'string',
            'telefonoMadre'=>'numeric|digits:8|min:0|integer',
            'municipioTrabajoMadre'=>'exists:municipios,id',
            'DirecciónMadre'=>'string',
            'sacramentosMadre'=>'array|exists:sacramento,id',
            'estadoCivilMadre'=>'exists:estadocivil,id',


            'nombreResponsable'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellidoResponsable'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'correoResponsable'=>'email',
            'DUIResponsable'=>'unique:padredefamilia,DUI|size:9|regex:/^([0-9])+$/i',
            'fechaNacimientoResponsable'=>'date',
            'oficioResponsable'=>'exists:oficios,id',
            'lugarTrabajoResponsable'=>'string',
            'telefonoTrabajoResponsable'=>'numeric|digits:8|min:0|integer',
            'municipioTrabajoResponsable'=>'exists:municipios,id',
            'DireccionTrabajoResponsable'=>'string',
            'sacramentosResponsable'=>'array|exists:sacramento,id',
            'estadoCivilResponsable'=>'exists:estadocivil,id',





        ];
    }
}
