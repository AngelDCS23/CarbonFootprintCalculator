<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hoteles_usuario extends Model
{
    protected $table = 'hoteles_usuario';

    protected $fillable = ['Nombre', 'Direccion', 'Pais', 'Numero_camas', 'fk_idEmpresa', 'fk_idInforme'];

    public $timestamps = false;

    public function empresa()
    {
        return $this->belongsTo(empresagrat::class, 'fk_idEmpresa', 'id');
    }

    public function informe(){
        return $this->belongsTo(Informe::class,'fk_idInforme','id');
    }
}
