<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    protected $table = "direccion";
    protected $primaryKey = "ID";

    public $timestamps = false;

    protected $fillable = [
        "Zona",
        "Calle",
        "Ciudad"
    ];
}
