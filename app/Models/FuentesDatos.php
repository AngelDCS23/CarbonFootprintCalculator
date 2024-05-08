<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuentesDatos extends Model{

    protected $table = "fuentes_datos";

    protected $fillable = [
        'Nombre',
    ];
}