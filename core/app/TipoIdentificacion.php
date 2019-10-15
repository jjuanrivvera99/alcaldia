<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.tipo_identificacion";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_tipo_identificacion";

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
