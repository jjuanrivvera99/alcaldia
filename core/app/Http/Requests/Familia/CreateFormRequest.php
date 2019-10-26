<?php

namespace App\Http\Requests\Familia;

use App\Http\Requests\ApiFormRequest;

/**
 * Class CreateFormRequest
 * @package App\Http\Requests\Familia
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
            'id_barrio' => 'required',
            'id_tipo_habitacion' => 'required',
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ingreso' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'id_barrio.required' => 'El id del barrio es obligatorio',
            'id_tipo_habitacion.required' => 'El id del tipo de habitación es obligatorio',
            'nombre.required' => 'El nombre es obligatorio',
            'direccion.required' => 'La dirección es obligarotia',
            'telefono.required' => 'El teléfono es obligatorio',
            'ingreso.required' => 'El ingreso es obligatorio'
        ];
    }

}
