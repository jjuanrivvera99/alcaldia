<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alcaldia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "nocore.alcaldia";

    /**
     * The primary key attribute.
     *
     * @var string
     */
    protected $primaryKey = "id_alcaldia";

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'id_alcalde',
        'nombre',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
