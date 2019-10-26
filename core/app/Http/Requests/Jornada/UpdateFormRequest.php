<?php

namespace App\Http\Requests\Jornada;

use App\Http\Requests\ApiFormRequest;

/**
 * Class UpdateFormRequest
 * @package App\Http\Requests\Jornada
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
            'nombre' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'nombre.required' => 'El nombre es obligatorio',
        ];
    }

}
