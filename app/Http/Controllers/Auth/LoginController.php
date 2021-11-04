<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;



class LoginController extends Controller
{
   // Mostrar el formulario del login
   public function showloginform(){

    return view ('auth.login');

}
//Longear
public function login(LoginRequest $request){

 
  
   //Auth: Establecer inicios de sesion
if (Auth::attempt( ['NumeroDocumento'=> $request ->input('NumeroDocumento'), 'password'=> $request ->input('password')])){
    return redirect ('asistencia');

}else {
   
return redirect ('login')->with("credenciales_invalidas","credenciales no validas ");

}
}
//Cerrar sesion

public function logout(){

Auth::logout();
return redirect('login')
->with("mensajeExito","Cierre de sesion  exitosamente");
}

}