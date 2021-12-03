<?php

namespace App\Http\Controllers;

use App\AsignarRol;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuariosRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\CambiarContrasenaController;
use App\Mail\CambiarContrasenaMail;
use App\Rol;

// use App\Mail\CambiarContrasenaMail;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $usuarios-> each(function($usuarios){
            $usuarios->Rol;

        });
        return view ('Usuario.indexUsuario')
        ->with("usuarios",$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Rol= Rol::all();
        return view('usuario.createUsuario')->with('rol',$Rol);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuariosRequest $request)
    {


        $maxVal = User::all()->max('IdUsuario');
        $maxVal++;


        $contra= Str::random(12);

        $nuevousuario = new User();
        $nuevousuario->Nombre = $request->input("nombre");
        $nuevousuario->Apellido = $request->input("apellido");
        $nuevousuario->email = $request->input("correo");
        $nuevousuario->password =  Hash::make($contra); /*Hash::make(str::random(64))*/;
        $nuevousuario->NumeroDocumento = $request->input("numerodocumento");
        $nuevousuario->FechaNacimiento = $request->input("fechanacimiento");
        $nuevousuario->Telefono = $request->input("telefono");
        $nuevousuario->Imagen = $request->input("imagen");
        $nuevousuario->save();


        $AsignarG= new AsignarRol();
        $AsignarG->IdRolFK = $request->input("usuariofk");
        $AsignarG ->IdUsuarioFK = $nuevousuario->IdUsuario;
        $AsignarG->save();



     //Enviar correo para el cambio de contraseña
     Mail::to($request->input('correo'))->send(new CambiarContrasenaMail ($maxVal));
     //redireccionamiento  a una ruta especifica
       return redirect ('Usuario')->with('Creado','Se ha creado usuario  exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario =User::find($id);
        return view('usuario.showUsuario')
        ->with("usuario",$usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuario.editUsuario')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuariosRequest $request, $id)
    {
        $usuario= User::find($id);
        //actualizar el estado del recurso
        //en virtud de los datos que vengan de los formularios

        $usuario->Nombre = $request->input("nombre");
        $usuario->Apellido = $request->input("apellido");
        $usuario->email = $request->$request->input("correo");
        $usuario->password = Hash::make($request->input("password"));
        $usuario->NumeroDocumento = $request->input("numerodocumento");
        $usuario->FechaNacimiento = $request->input("fechanacimiento");
        $usuario->Telefono = $request->input("telefono");
        $usuario->Imagen = $request->input("imagen");

        $usuario->save();
        return redirect("Usuario")
        ->with("mensaje", "Usuario actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
