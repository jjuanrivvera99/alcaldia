<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "core.ciudad";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_ciudad";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'id_pais',
        'nombre'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
