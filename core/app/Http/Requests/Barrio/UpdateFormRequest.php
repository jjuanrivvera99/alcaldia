<?php

namespace App\Http\Requests\Barrio;

use App\Http\Requests\ApiFormRequest;

/**
 * Class UpdateFormRequest
 * @package App\Http\Requests\Barrio
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
            'id_localidad' => "required",
            'nombre' => "required",
            'area' => "required",
            'estrato' => "required",
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'id_localidad.required' => "El id_localidad es obligatorio",
            'nombre.required' => "El nombre es obligatorio",
            'area.required' => "El area es obligatorio",
            'estrato.required' => "El estrato es obligatorio",
        ];
    }

}
