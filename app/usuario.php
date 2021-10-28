<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "Alias";

    public $timestamps = false;

    protected $fillable = [
        "Nombre",
        "Apellidos",
        "Clave",
        "PERFIL_ID"
    ];
}
