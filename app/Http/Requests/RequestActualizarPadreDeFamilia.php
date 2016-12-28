<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestActualizarPadreDeFamilia extends Request
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
            'nombrePadre'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellidosPadre'=>'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'correoPadre'=>'email',
            'DUIpadre'=>'size:9|regex:/^([0-9])+$/i',
            'fechaNacimientoPadre'=>'date',
            'oficiosPadre'=>'exists:oficios,id',
            'lugarTrabajoPadre'=>'string',
            'telefonoTrabajoPadre'=>'numeric|digits:8|min:0|integer',
            'municipioTrabajoPadre'=>'exists:municipios,id',
            'DirecciónPadre'=>'string',
            'sacramentoPadre'=>'array|exists:sacramento,id',
            'estadoCivilPadre'=>'exists:estadocivil,id',

        ];
    }
}
