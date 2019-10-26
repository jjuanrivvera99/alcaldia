<?php

namespace App\Http\Requests\Plantel;

use App\Http\Requests\ApiFormRequest;

/**
 * Class CreateFormRequest
 * @package App\Http\Requests\Plantel
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
            'id_tipo_plantel' => 'required',
            'id_localidad' => 'required',
            'nombre' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'id_tipo_plantel.required' => 'El tipo de plantel es obligatorio',
            'id_localidad.required' => 'La localidad es obligatoria',
            'nombre.required' => 'El nombre es obligatorio',
        ];
    }

}
