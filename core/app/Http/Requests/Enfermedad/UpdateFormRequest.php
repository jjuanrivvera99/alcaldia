<?php

namespace App\Http\Requests\Enfermedad;

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
            'nombre' => 'required',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
