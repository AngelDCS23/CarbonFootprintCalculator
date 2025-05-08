<?php

namespace App\Http\Controllers;

use App\Models\ConsumoEnergeticoUsuario;
use App\Models\EmisionesAño;
use Illuminate\Http\Request;
use App\Http\Controllers\GuardarEmisionesDirectasController;
use Illuminate\Support\Facades\Log;


class GuardarConsumoEnergeticoController extends Controller{

    public function AlmacenarConsumoEnergetico(request $request){
        \Log::info('PAPAPAPAPAPAPPAPAPAPAPAPAPAPAPAPPAPPAPAPAPPAA');
        $nombre = $request->comerci;
        $cantidad = $request->cantidad;
        $idHotel = session()->get("IdHotel");
        $fkConsuEner = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idconsumoEnergetico');
        $RegistroConEner = ConsumoEnergeticoUsuario::find($fkConsuEner);
        \Log::info($fkConsuEner);
        \Log::info($RegistroConEner);
        \Log::info('PAPAPAPAPAPAPPAPAPAPAPAPAPAPAPAPPAPPAPAPAPPAA');

        $RegistroConEner->update([
            'Nombre_Comer' => $nombre,
            'KWH' => $cantidad,
        ]);
    }
}

