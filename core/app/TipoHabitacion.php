<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.tipo_habitacion";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_tipo_habitacion";

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
