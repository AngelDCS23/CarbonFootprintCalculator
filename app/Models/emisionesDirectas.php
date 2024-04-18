<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emisionesDirectas extends Model
{
    protected $table = 'emidirectasgrat_datos';

    protected $fillable = [
        'Nombre',
    ];

    public $timestamps = false;
}
