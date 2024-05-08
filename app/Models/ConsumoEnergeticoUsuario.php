<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumoEnergeticoUsuario extends Model
{
    protected $table = 'consumo_energetico_usuarios';

    protected $fillable = [
        'KWH',
        'Nombre_Comer',
    ];

    public $timestamps = false;
}
