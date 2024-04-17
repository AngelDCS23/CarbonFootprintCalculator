<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonaGrat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller{
    public function login(Request $request){

        $credenciales = $request->validate([
            'Correo' => 'required|string|email',
            'password' => 'required|string|max:45',
        ]);

        \Illuminate\Support\Facades\Log::info('Credenciales recibidas:', $credenciales);
        $usuario = PersonaGrat::where('Correo', $credenciales['Correo'])->first();
        
        $datos = $usuario->toArray();

        if ($usuario && Hash::check($credenciales['password'], $usuario->password)) {
            $usuario = Auth::user();
            $idEmpresa = $datos['fk_idEmpresa'];
            return redirect()->route('hotel', ['idHotel' => $idEmpresa]);
        }else{
            return redirect()->back()->withErrors(['error' => 'Credenciales incorrectas']);
        }
    }
}
