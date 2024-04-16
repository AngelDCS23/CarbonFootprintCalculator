<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\idiomaDatos;

class WebDatos extends Model
{
    protected $table = 'web_datos';

    protected $fillable = ['titulos', 'subtitulos', 'cuerpo', 'boton', 'fk_ididioma'];

    public function idiomaRelacion()
    {
        return $this->belongsTo(idiomaDatos::class, 'fk_ididioma','id');
    }
}
