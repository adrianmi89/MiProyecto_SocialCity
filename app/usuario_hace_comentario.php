<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_hace_comentario extends Model
{
    protected $table = "restaurante";
    protected $primaryKey = "USUARIO_Alias";
    protected $primaryKey = "USUARIO_PERFIL_ID";
    protected $primaryKey = "COMENTARIO_ID";

    public $timestamps = false;

    protected $fillable = [
        
    ];
}
