<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class Informe extends Model{
    
    protected $table = "informe";

    protected $fillable = ['fk_idPersona', 'fk_idEmpresa', 'año', 'nombre',' fk_idEmpresaRe'];

    protected $primaryKey = 'id';

    public function persona(){
        return $this->belongsTo(user::class,'fk_idPersona','id');
    }

    public function empresa(){
    return $this->belongsTo(empresagrat::class,'fk_idEmpresa','id');
    }

    public function empresaRe(){
        return $this->belongsTo(empresa::class,'fk_idEmpresaRe','id');
    }

}