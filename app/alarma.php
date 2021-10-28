<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alarma extends Model
{
    protected $table = "alarma";
    protected $primaryKey = "N.Alarma";

    public $timestamps = false;

    protected $fillable = [
        "Nombre",
        "Fecha",
        "Hora",
        "Descripción"
    ];
}
