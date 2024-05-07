<?php

namespace App\Http\Controllers;

use App\Models\EmisionesIndirectasUsuario;
use Illuminate\Http\Request;
use App\Models\emisionesDirectas;
use App\Models\CombustibleMaquinariaDato;
use App\Models\EmisionFugitivaGasProduccion;
use App\Models\ConsumoMaquinariaUsuario;
use App\Models\ConsumoVehiculoUsuario;
use App\Models\EmisionDirecta;
use App\Models\EmisionesAño;
use App\Models\hoteles_usuario;
use Illuminate\Support\Facades\Log;

class GuardarEmisionesDirectasController extends Controller{
    public function ObtenerReferencia(){
        $idHotel = session()->get("IdHotel");
        //Log:info($idHotel);
        $idEmiAño = EmisionesAño::where('fk_idHotel', $idHotel)->value('id');
        //Log:info($idEmiAño);
        $idEmiIndirec = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idEmisionesIndirectas');
        //Log:info($idEmiIndirec);
        $idEmiDirec = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idEmisiones_Directas');
        //Log:info($idEmiDirec);
        $idEmiConsumoVehi = ConsumoVehiculoUsuario::where('fk_idEmisiones_Directas', $idEmiDirec)->value('id');
        //Log:info($idEmiConsumoVehi);
        $idEmiFugitivas = EmisionDirecta::where('fk_idEmisiones_Fugitivas', $idEmiDirec)->value('id');
        //Log:info($idEmiFugitivas);
    }

    public function ObtenerIdEmiAño(){
        $idHotel = session()->get("idHotel");
        $idEmiAño = EmisionesAño::where('fk_idHotel', $idHotel)->value('id');
        return $idEmiAño;
    }

    public function ObtenerIdEmiIndirec(){
        $idHotel = session()->get("idHotel");
        $idEmiIndirec = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idEmisionesIndirectas');
        return $idEmiIndirec;
    }
    public function ObtenerEmiDirec($idHotel){
        $idEmiDirec = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idEmisiones_Directas');
        return $idEmiDirec;
    }

    public function ObtenerConsumoVehi(){
        $idHotel = session()->get("IdHotel");
        $idEmiDirect = $this->ObtenerEmiDirec($idHotel);
        $idEmiConsumoVehi = ConsumoVehiculoUsuario::where('fk_idEmisiones_Directas', $idEmiDirect)->value('id');
        return $idEmiConsumoVehi;
    }

    public function ObtenerEmiFugitivas($idHotel){
        $idEmiDirect = $this->ObtenerEmiDirec($idHotel);
        $idEmiFugitivas = EmisionDirecta::where('fk_idEmisiones_Fugitivas', $idEmiDirect)->value('fk_idEmisiones_Fugitivas');
        return $idEmiFugitivas; 
    }
    
    public function almacenarEMIDirectas(request $request){
        $tipo = $request->tipo;
        $subtipo = $request->subtipo;
        $cantidad = $request->cantidad;
        $idHotel = session()->get("IdHotel");

        //Con esto obtengo el registro donde voy a almacenar el resultado
        $emiDirec = EmisionDirecta::find($this->ObtenerEmiDirec($idHotel));
        $idEmiDirec = $emiDirec->id;
        //Obtengo el id de las emisiones Fugitivas asociadas a las emisiones directas
        $idEmiFugi = $emiDirec->fk_idEmisiones_Fugitivas;
        //Obtengo el registro completo de dichas emisiones Fugitivas
        $emiFugi = EmisionFugitivaGasProduccion::find($idEmiFugi);
        //NO TENGO NI IDEA DE QUE ESTOY HACIENDO AQUÍ
        $ConVehiculos = ConsumoVehiculoUsuario::where('fk_idEmisiones_Directas', $idEmiDirec);
        log::info($ConVehiculos);

        if($tipo == 'Consumo grupo electrógeno'){
            $emiDirec->update([
                'Consumo_grupo_electrogeno' => $cantidad,
            ]);
        }else if($tipo == 'Emision recarga extintores CO2'){
            $emiDirec->update([ 
            'Recargas_Extintores' => $cantidad
            ]); 
        }else if($tipo == 'Consumo gas natural'){
            $emiDirec->update([
                'Consumo_GasNatural' => $cantidad   
            ]);
        }else if($tipo == 'Emisiones fugitivas'){
            $emiFugi->update([
                $subtipo => $cantidad,
            ]);
        }else if($tipo == 'Vehículos propios del hotel'){
            $ConVehiculos->update([
                $subtipo => $cantidad,
            ]);
        }
    }
    
}

