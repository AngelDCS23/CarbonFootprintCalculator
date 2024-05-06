<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ObtenerIdHotelController extends Controller{

    public function ObtenerIdHotel(request $request){
        $idHotel = $request->input('id');
        Log::info('(DESDE CONTROLADOR)ID del hotel: ' . $idHotel);
        session() -> put('IdHotel', $idHotel);
    }
}