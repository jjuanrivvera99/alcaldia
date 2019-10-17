<?php

namespace App\Http\Requests\Alcaldia;

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
            'id_alcalde' => 'required',
            'nombre' => 'required',
        ];
    }

    public function messages(){
        return [
            'id_alcalde.required' => "El id_alcalde es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
