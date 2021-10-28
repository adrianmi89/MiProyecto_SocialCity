<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class me_gusta extends Model
{
    protected $table = "me_gusta";
    protected $primaryKey = "ID";

    public $timestamps = false;

    protected $fillable = [
        "Alias_USUARIO"
    ];
}
