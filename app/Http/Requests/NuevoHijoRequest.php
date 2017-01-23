<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NuevoHijoRequest extends Request
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
     *
     * @return array
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
        ];
    }
}
