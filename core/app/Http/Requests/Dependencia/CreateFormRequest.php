<?php

namespace App\Http\Requests\Dependencia;

use App\Http\Requests\ApiFormRequest;

/**
 * Class CreateFormRequest
 * @package App\Http\Requests\Dependencia
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
            'id_alcaldia' => 'required',
            'nombre' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'id_alcaldia.required' => "El id de la alcaldia es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
