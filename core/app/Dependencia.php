<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "nocore.dependencia";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_dependencia";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'id_alcaldia',
        'nombre'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
