<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\hoteles_usuario;
use App\Models\EmisionDirecta;
use App\Models\emisionesIndirectasUsiario;

class EmisionesAño extends Model
{
    protected $table = 'emisiones_año';

    protected $fillable = [
        'fk_idEmisiones_Directas',
        'fk_idEmisionesIndirectas',
        'fk_idHotel',
        'consumo_energetico',
        'año',
    ];

    public $timestamps = false;

    public function emisionesDirectas(){
        return $this->belongsTo(EmisionDirecta::class,'fk_idEmisiones_Directas','id');    
    }

    public function emisionesIndirectas(){  
        return $this->belongsTo(EmisionesIndirectasUsuario::class,'fk_idEmisionesIndirectas',);
    }

    public function fk_idHotel(){
        return $this->belongsTo(hoteles_usuario::class,'fk_idHotel','id');
    }
}
