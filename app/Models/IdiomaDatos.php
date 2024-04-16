<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class idiomaDatos extends Model
{
    protected $table = 'idiomas_datos';

    protected $fillable = ['idioma'];

    public $timestamps = false;
}
