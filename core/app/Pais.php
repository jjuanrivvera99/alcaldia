<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pais
 * @package App
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class Pais extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.pais";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_pais";

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
