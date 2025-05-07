<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonaGrat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller{
    /*
    public function login(Request $request){

        $credenciales = $request->validate([
            'Correo' => 'required|string|email',
            'password' => 'required|string|max:45',
        ]);

        $usuario = PersonaGrat::where('Correo', $credenciales['Correo'])->first();
        $datos = $usuario->toArray();

        if ($usuario && Hash::check($credenciales['password'], $usuario->password)) {
            $usuario = Auth::user();

            $idEmpresa = $datos['fk_idEmpresa'];
            $idUsuario = $datos['id'];
            $nombre = $datos['Nombre_Cont'];
            session()->put('idEmpresa', $idEmpresa);
            session()->put('nombre', $nombre);
            session()->put('idusu', $idUsuario);

            return redirect()->route('listadoInformes');
        }else{
            return redirect()->back()->withErrors(['error' => 'Credenciales incorrectas']);
        }
    }
        */

    public function loginNuevo(Request $request){
        $credenciales = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|max:45',
        ]);

        $remember = $request->has('remember_me');

        if (Auth::attempt($credenciales, $remember)) {
            $request->session()->regenerate();
    
            return redirect()->route('listadoInformes');
        }
    
        return back()->with('error', 'Error en el inicio de sesión');
    
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home'); 
    }
}
