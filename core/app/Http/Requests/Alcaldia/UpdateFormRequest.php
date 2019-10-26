<?php

namespace App\Http\Requests\Alcaldia;

use App\Http\Requests\ApiFormRequest;

/**
 * Class UpdateFormRequest
 * @package App\Http\Requests\Alcaldia
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
            'id_alcalde' => 'required',
            'nombre' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'id_alcalde.required' => "El id_alcalde es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
