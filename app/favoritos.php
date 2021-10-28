<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favoritos extends Model
{
    protected $table = "favoritos";
    protected $primaryKey = "ID";

    public $timestamps = false;

    protected $fillable = [
        "Nombre",
        "Direccion",
        "Puntuacion",
        "Telefono"
    ];
}
