<?php

namespace App\Http\Requests\Integrante;

use App\Http\Requests\ApiFormRequest;

class UpdateFormRequest extends ApiFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_tipo_identificacion' => 'required',
            'numero_identificacion' => 'required',
            'id_ciudad' => 'required',
            'id_familia' => 'required',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'fecha_nacimiento' => 'required',
        ];
    }

    public function messages(){
        return [
            'id_tipo_identificacion.required' => 'El tipo de identificación es obligatoria',
            'numero_identificacion.required' => 'El número de identificación es obligatorio',
            'id_ciudad.required' => 'La ciudad es obligatoria',
            'id_familia.required' => 'La familia es obligatoria',
            'primer_nombre.required' => 'El primer nombre es obligatorio',
            'segundo_nombre.required' => 'El segundo nombre es obligatorio',
            'primer_apellido.required' => 'El primer apellido es obligatorio',
            'segundo_apellido.required' => 'El segundo apellido es obligatorio',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
        ];
    }

}
