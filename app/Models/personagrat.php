<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personagrat extends Model
{
    protected $table = 'personagrat';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'Nombre_Cont',
        'Num_telf',
        'Correo',
        'fk_idEmpresa',
    ];

    public function empresa()
    {
        return $this->belongsTo(EmpresaGrat::class, 'fk_idEmpresa', 'id');
    }
}