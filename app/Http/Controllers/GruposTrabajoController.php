<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GrupoTrabajo;
use App\SeguimientoProyecto;
use App\User;
use DB;
use Illuminate\Support\Str;
use App\Http\Requests\GrupoRequest;

class GruposTrabajoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = GrupoTrabajo:: all();
        $grupos-> each(function($grupos){
            $grupos->GrupoTrabajo;
            
        });
        return view('GrupoTrabajo.Index')->with('grupos', $grupos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=User::all();
        $seguimiento=SeguimientoProyecto::all();
        // $GrupoT = DB::table('AsignarRol')
        // ->where ('IdRolFK','=','2')
        // ->get ();
        return view('GrupoTrabajo.create')->with('usuarios',$usuarios)->with('seguimiento',$seguimiento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoRequest $request)
    {

        $Codigo=Str::random(4);
        $grupo = new GrupoTrabajo();
      
        $seguimiento = new SeguimientoProyecto();

        $grupo -> CodigoGrupo ="Grup$Codigo";
        $grupo -> FechaInicio = $request -> input('inicio');
        $grupo -> FechaDesactivacion = $request -> input('desactivacion'); 
        $grupo -> save();
       
        $seguimiento -> IdGrupoFK = $grupo->IdGrupo;
        $seguimiento -> IdUsuarioFK = $request -> input ('Int21');        
        $seguimiento-> save();

        $seguimiento1 = new SeguimientoProyecto();
        $seguimiento1 -> IdGrupoFK = $grupo->IdGrupo;
        $seguimiento1 -> IdUsuarioFK = $request -> input ('Int1');
        $seguimiento1-> save();

        $seguimiento1 = new SeguimientoProyecto();
        $seguimiento1 -> IdGrupoFK = $grupo->IdGrupo;
        $seguimiento1 -> IdUsuarioFK = $request -> input ('Int22');
        $seguimiento1-> save();

        $seguimiento2 = new SeguimientoProyecto();
        $seguimiento2 -> IdGrupoFK = $grupo->IdGrupo;
        $seguimiento2 -> IdUsuarioFK = $request -> input ('Int31');
        $seguimiento2-> save();

        $seguimiento3 = new SeguimientoProyecto();
        $seguimiento3 -> IdGrupoFK = $grupo->IdGrupo;
        $seguimiento3 -> IdUsuarioFK = $request -> input ('Int32');
        $seguimiento3-> save();

        $seguimiento4 = new SeguimientoProyecto();
        $seguimiento4 -> IdGrupoFK = $grupo->IdGrupo;
        $seguimiento4 -> IdUsuarioFK = $request -> input ('Int33');
        $seguimiento4-> save();

         $seguimiento5 = new SeguimientoProyecto();
         $seguimiento5 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento5 -> IdUsuarioFK = $request -> input ('Int41');
         $seguimiento5-> save();

         $seguimiento6 = new SeguimientoProyecto();
         $seguimiento6 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento6 -> IdUsuarioFK = $request -> input ('Int42');
         $seguimiento6-> save();

         $seguimiento7 = new SeguimientoProyecto();
         $seguimiento7 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento7 -> IdUsuarioFK = $request -> input ('Int43');
         $seguimiento7-> save();

         $seguimiento2 = new SeguimientoProyecto();
         $seguimiento2 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento2 -> IdUsuarioFK = $request -> input ('Int44');
         $seguimiento2-> save();

         $seguimiento2 = new SeguimientoProyecto();
         $seguimiento2 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento2 -> IdUsuarioFK = $request -> input ('Int51');
         $seguimiento2-> save();

         $seguimiento2 = new SeguimientoProyecto();
         $seguimiento2 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento2 -> IdUsuarioFK = $request -> input ('Int52');
         $seguimiento2-> save();

         $seguimiento2 = new SeguimientoProyecto();
         $seguimiento2 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento2 -> IdUsuarioFK = $request -> input ('Int53');
         $seguimiento2-> save();

         $seguimiento2 = new SeguimientoProyecto();
         $seguimiento2 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento2 -> IdUsuarioFK = $request -> input ('Int54');
         $seguimiento2-> save();

         $seguimiento2 = new SeguimientoProyecto();
         $seguimiento2 -> IdGrupoFK = $grupo->IdGrupo;
         $seguimiento2 -> IdUsuarioFK = $request -> input ('Int55');
         $seguimiento2-> save();
      
        return redirect ('Grupo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo= GrupoTrabajo::find($id);

        
        $Integrantes= DB::table('SeguimientoProyecto')
        ->where ('IdGrupoFK','=',$id)
        ->get ();

        $usuarios=User::find($id);

        return view('GrupoTrabajo.show')->with('grupo', $grupo)->with('usuarios',$usuarios)->with('Integrantes',$Integrantes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = GrupoTrabajo::find($id);
        $usuarios=User::all();

        return view('GrupoTrabajo.edit')->with('grupo', $grupo)->with('usuarios',$usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GrupoRequest $request, $id)
    {

        $grupo = GrupoTrabajo::find($id);
       
        $seguimiento = new SeguimientoProyecto();

     
        $grupo -> FechaInicio = $request -> input('inicio');
        $grupo -> FechaDesactivacion = $request -> input('desactivacion');
        $seguimiento->IdUsuarioFK = $request -> input ('grupos');

        $grupo -> save();

        
        return redirect('Grupo')->with('actualizado', 'El grupo se ha actualizado exitosamente');
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
