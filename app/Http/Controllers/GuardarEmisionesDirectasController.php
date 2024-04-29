<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emisionesDirectas;
use App\Models\CombustibleMaquinariaDato;
use App\Models\EmisionFugitivaGasProduccion;
use App\Models\ConsumoMaquinariaUsuario;

class GuardarEmisionesDirectasController extends Controller{

    public function almacenarEMIDirectas(request $request){
        $tipo = $request->tipo;
        $subtipo = $request->subtipo;
        $cantidad = $request->cantidad;

        if($tipo = 'Consumo grupo electrógeno'){
            
        }
    }
}

