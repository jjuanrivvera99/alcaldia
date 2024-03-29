<?php

namespace App\Http\Requests\Alcalde;

use App\Http\Requests\ApiFormRequest;

/**
 * Class CreateFormRequest
 * @package App\Http\Requests\Alcalde
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
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
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(){
        return [
            'primer_nombre.required' => "El primer nombre es obligatorio",
            'segundo_nombre.required' => "El segundo nombre es obligatorio",
            'primer_apellido.required' => "El primer apellido es obligatorio",
            'segundo_apellido.required' => "El segundo apellido es obligatorio",
        ];
    }

}
