<?php

namespace App\Http\Requests\Dependencia;

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
            'id_alcaldia' => 'required',
            'nombre' => 'required',
        ];
    }

    public function messages(){
        return [
            'id_alcaldia.required' => "El id de la alcaldia es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
