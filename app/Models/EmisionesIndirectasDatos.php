<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Anio;
use App\Models\FuentesDatos;

class EmisionesIndirectasDatos extends Model{

    protected $table = 'emisiones_indirectas_datos';

    protected $fillable = [
        'fk_idAño',
        'fk_idFuente',
        'nombre',
        'valor',
    ];

    public $timestamps = false;

    public function idAño(){
        return $this->belongsTo(Anio::class,'fk_idAño','id');
    }
    
    public function idFuente(){
        return $this->belongsTo(FuentesDatos::class,'fk_idFuente','id');
    }
}