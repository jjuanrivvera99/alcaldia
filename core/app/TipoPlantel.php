<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoPlantel
 * @package App
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class TipoPlantel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.tipo_plantel";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_tipo_plantel";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
