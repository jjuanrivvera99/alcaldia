<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.familia";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_familia";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'id_barrio',
        'id_tipo_habitacion',
        'nombre',
        'direccion',
        'telefono',
        'ingreso'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
