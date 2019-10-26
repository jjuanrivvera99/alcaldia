<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Integrante
 * @package App
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class Integrante extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.integrante";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_integrante";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'id_tipo_identificacion',
        'numero_identificacion',
        'id_ciudad',
        'id_familia',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'fecha_nacimiento',
        'email',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
