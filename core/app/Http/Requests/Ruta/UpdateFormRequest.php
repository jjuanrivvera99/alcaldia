<?php

namespace App\Http\Requests\Ruta;

use App\Http\Requests\ApiFormRequest;

/**
 * Class UpdateFormRequest
 * @package App\Http\Requests\Ruta
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
            'descripcion' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'descripcion.required' => 'La descripcion es obligatorio',
        ];
    }

}
