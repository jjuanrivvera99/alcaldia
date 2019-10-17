<?php

namespace App\Http\Requests\Ruta;

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
            'descripcion' => 'required',
        ];
    }

    public function messages(){
        return [
            'descripcion.required' => 'La descripcion es obligatorio',
        ];
    }

}
