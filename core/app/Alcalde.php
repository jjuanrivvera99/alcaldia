<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alcalde extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "nocore.alcalde";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_alcalde";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
