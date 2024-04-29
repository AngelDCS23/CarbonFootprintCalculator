<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumoVehiculoUsuario extends Model
{
    protected $table = 'consumo_vehiculos_usuarios';

    protected $fillable = [
        'fk_idEmisiones_Directas',
        'Turismos',
        'Furgonetas_furgones',
        'Camiones_autobuses',
        'Ciclomotores_motocicletas',
    ];

    public $timestamps = false;

    public function emisionesDirectas(){
        return $this->belongsTo(EmisionDirecta::class,'fk_idEmisiones_Directas','id');
    }
}
