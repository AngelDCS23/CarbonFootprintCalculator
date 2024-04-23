<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comercializadoras extends Model{
    protected $table = "comercializadoras_datos";

    protected $fillable = ["fk_idAño","fk_idPais","Comercializadora","Kg_CO2e_kWh","",];

    public $timestamps = false; 

    public function año(){
        return $this->belongsTo(Anio::class,"fk_idAño","id");
    }

    public function pais(){
        return $this->belongsTo(Pais::class,"fk_idPais","id");
    }
}
