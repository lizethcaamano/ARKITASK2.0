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
        // $GrupoT = DB::table('AsignarRol')
        // ->where ('IdRolFK','=','2')
        // ->get ();
        return view('GrupoTrabajo.create')->with('usuarios',$usuarios)->with('usuarios',$usuarios);
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

        $grupo -> CodigoGrupo ="Grup$codigo";
        $grupo -> FechaInicio = $request -> input('inicio');
        $grupo -> FechaDesactivacion = $request -> input('desactivacion');
        

        $grupo -> save();



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
        $usuarios=User::find($id);

        return view('GrupoTrabajo.show')->with('grupo', $grupo)->with('usuarios',$usuarios);
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

        return view('GrupoTrabajo.edit')->with('grupo', $grupo);
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

        $grupo -> CodigoGrupo = $request -> input('codigoe');
        $grupo -> FechaInicio = $request -> input('inicio');
        $grupo -> FechaDesactivacion = $request -> input('desactivacion');
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
