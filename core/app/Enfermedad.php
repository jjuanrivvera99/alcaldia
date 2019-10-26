<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enfermedad
 * @package App
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class Enfermedad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.enfermedad";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_enfermedad";

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
