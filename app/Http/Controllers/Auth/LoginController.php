<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Rol;
use App\Providers\RouteServiceProvider;
=======
>>>>>>> 02eace5ed143c5b250da821217b25c0cdec27de2
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
     // Mostrar el formulario del login
   public function form(){


    if(Auth::check()){


var_dump(Auth::user());

switch(Auth::user()->Rol()->first()->NombreRol){
    case "Delineante": return redirect("asistencia");
             break;
            case "Ingeniero": return redirect("asistencia");
            break;
            case "Administrador": return redirect("Usuario");
             break;
             case "Gerente": return redirect("gerente/Entregables");
<<<<<<< HEAD
=======
             break;
             case "Encargado Proyecto": return redirect("encargado/Asistencia");
>>>>>>> 02eace5ed143c5b250da821217b25c0cdec27de2
             break;
            }
            }
            else{
        return view('auth.login');
    }

}
//Longear
public function login(LoginRequest $request){



   //Auth: Establecer inicios de sesion
if (Auth::attempt( ['email'=> $request ->input('email'), 'password'=> $request ->input('password')])){

var_dump(Auth::user());
  switch(Auth::user()->Rol()->first()->NombreRol){
      case "Delineante": return redirect("asistencia");
               break;
              case "Ingeniero": return redirect("asistencia");
              break;
              case "Administrador": return redirect("Usuario");
               break;
               case "Gerente": return redirect("gerente/Entregables");
               break;
<<<<<<< HEAD
               case "Encargado Proyecto": return redirect("asistencia");
=======
               case "Encargado Proyecto": return redirect("encargado/Asistencia");
>>>>>>> 02eace5ed143c5b250da821217b25c0cdec27de2
               break;
 }

}
else {

return redirect ('login')->with("credenciales_invalidas","credenciales no validas ");

}
}
//Cerrar sesion

public function logout(){
  Auth::logout();
return redirect('login')
->with("mensajeExito","Cierre de sesion  exitoso");
}
}


