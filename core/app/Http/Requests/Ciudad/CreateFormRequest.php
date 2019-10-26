<?php

namespace App\Http\Requests\Ciudad;

use App\Http\Requests\ApiFormRequest;

/**
 * Class CreateFormRequest
 * @package App\Http\Requests\Ciudad
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
            'id_pais' => 'required',
            'nombre' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'id_pais.required' => "El id del pais es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
        ];
    }

}
