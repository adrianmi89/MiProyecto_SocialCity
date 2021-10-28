<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    protected $table = "comentario";
    protected $primaryKey = "ID";

    public $timestamps = false;

    protected $fillable = [
        "Descripcion",
        "RESTAURANTE_Nombre",
        "BAR_Nombre",
        "ME_GUSTA_ID"
    ];
}
