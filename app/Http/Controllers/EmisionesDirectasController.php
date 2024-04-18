<?php

namespace App\Http\Controllers;

use App\Models\emisionesDirectas;
use Illuminate\Http\Request;

class EmisionesDirectasController extends Controller
{
    public function listadoNombres()
    {
        $emidirec = emisionesDirectas::All();
        return response()->json($emidirec);
    }
}