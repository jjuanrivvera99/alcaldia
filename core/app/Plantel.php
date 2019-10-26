<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plantel
 * @package App
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class Plantel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.plantel";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_plantel";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'id_tipo_plantel',
        'id_localidad',
        'nombre'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}