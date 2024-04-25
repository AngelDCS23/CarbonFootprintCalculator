<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmisionDirecta extends Model
{
    protected $table = 'emisiones_directas';

    protected $fillable = [
        'Consumo_GasNatural',
        'Recargas_Extintores',
        'Consumo_grupo_electrogeno',
        'fk_idEmisiones_Fugitivas',
    ];

    public $timestamps = false;

    public function emisionesFugitivas(){
        return $this->belongsTo(EmisionFugitivaGasProduccion::class,'fk_idEmisiones_Fugitivas','id');    
    }
}
