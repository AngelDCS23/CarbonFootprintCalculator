<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
  protected $table = "empresa";
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Num_Hoteles',
        'Volumen_facturacion',
        'Direccion'
    ];
}
