<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CambiarContrasenaController extends Controller
{
    //Metodo para mostrar el formulario de cambio de contraseña
    public function mostrarFormCambiarPass($idUsuario)
    {
        $usuario = User::find($idUsuario);
        return view('auth.asignarcontra')->with('usuario', $usuario);
    }

    //Metodo para cambiar la contraseña del usuario
    public function cambiarContrasena(Request $request, $idUsuario)
    {
        $modificarUsuario= User::find($idUsuario);
        $modificarUsuario->password=Hash::make($request->input('password'));
        $modificarUsuario->save();

        return redirect ('login');
    }
}?>
