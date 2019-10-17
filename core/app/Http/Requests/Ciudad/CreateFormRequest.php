<?php

namespace App\Http\Requests\Ciudad;

use App\Http\Requests\ApiFormRequest;

class CreateFormRequest extends ApiFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_pais' => 'required',
            'nombre' => 'required',
        ];
    }

    public function messages(){
        return [
            'id_pais.required' => "El id del pais es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
