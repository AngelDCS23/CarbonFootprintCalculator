<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pais extends Model{
    protected $table = "paises_datos";

    protected $fillable = ['Nombre', 'Poblacion'];

    public $timestamps = false;

    
}