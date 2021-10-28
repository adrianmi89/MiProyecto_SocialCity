<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurante extends Model
{
    protected $table = "restaurante";
    protected $primaryKey = "ID";

    public $timestamps = false;

    protected $fillable = [
        "Sexo",
        "Edad",
        "EstadoCivil",
        "RamaProfesional",
        "Intereses",
        "FAVORITOS_ID",
        "ALARMA_N.Alarma"
    ];
}
