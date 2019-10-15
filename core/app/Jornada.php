<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.jornada";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_jornada";

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
