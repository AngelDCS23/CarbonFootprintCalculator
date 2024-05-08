<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumoVehiculoUsuario extends Model
{
    protected $table = 'consumo_vehiculos_usuarios';

    protected $fillable = [
        'fk_idEmisiones_Directas',
        'Turismos(M1)',
        'Furgonetas y furgones (N2,N3,M2,M3)',
        'Camiones y autobuses (N2,N3,M2,M3)',
        'Ciclomotores y motocicletas (L)',
    ];
    
    public $timestamps = false;

    public function emisionesDirectas(){
        return $this->belongsTo(EmisionDirecta::class,'fk_idEmisiones_Directas','id');
    }
}
