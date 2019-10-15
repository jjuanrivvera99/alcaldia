<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.ruta";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_ruta";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
