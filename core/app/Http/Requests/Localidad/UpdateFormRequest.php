<?php

namespace App\Http\Requests\Localidad;

use App\Http\Requests\ApiFormRequest;

/**
 * Class UpdateFormRequest
 * @package App\Http\Requests\Localidad
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
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

    /**
     * @return array
     */
    public function messages(){
        return [
            'id_alcaldia.required' => "El id_alcaldia es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
