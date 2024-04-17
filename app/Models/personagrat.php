<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class personagrat extends Authenticatable
{
    protected $table = 'personagrat';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'Nombre_Cont',
        'Num_telf',
        'Correo',
        'fk_idEmpresa',
        'password',
    ];

    public function empresa()
    {
        return $this->belongsTo(EmpresaGrat::class, 'fk_idEmpresa', 'id');
    }
}
