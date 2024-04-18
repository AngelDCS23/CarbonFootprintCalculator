<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subtiposed;

class subtiposedController extends Controller{

    public function listadoSubtipos(request $request){

        $id = $request->id;

        $subtipos = Subtiposed::where('fk_idED', $id)->get('Nombre');
        return response()->json($subtipos);
    }
}