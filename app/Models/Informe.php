<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class Informe extends Model{
    
    protected $table = "informe";

    protected $fillable = ['fk_idPersona', 'fk_idEmpresa', 'año' ];

    protected $primaryKey = 'id';
    public $timestamps = false;

    public function persona(){
        return $this->belongsTo(personagrat::class,'fk_idPersona','id');
    }

    public function empresa(){
    return $this->belongsTo(empresagrat::class,'fk_idEmpresa','id');
    }

}