<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumoMaquinariaUsuario extends Model
{
    protected $table = 'consumo_maquinaria_usuarios';

    protected $fillable = [
        'fk_idEmisiones_Directas',
        'Consumo_Maquinaria',
    ];

    public $timestamps = false;

    public function emisionesDirectas(){
        return $this->belongsTo(EmisionDirecta::class,'fk_idEmisiones_Directas','id');
    }
}
