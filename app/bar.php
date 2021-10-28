<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bar extends Model
{
    protected $table = "bar";
    protected $primaryKey = "Nombre";

    public $timestamps = false;

    protected $fillable = [
        "Capacidad",
        "Ocupacion",
        "Puntuacion"
        "Horario",
        "DIRECCION_ID"
    ];
}
