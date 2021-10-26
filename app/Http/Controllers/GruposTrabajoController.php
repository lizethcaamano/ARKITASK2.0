<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GrupoTrabajo;

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
        $grupos = GrupoTrabajo::paginate(10);

        return view('GrupoTrabajo.Index')->with('grupos', $grupos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('GrupoTrabajo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoRequest $request)
    {
        $grupo = new GrupoTrabajo();

        $grupo -> CodigoGrupo = $request -> input('codigo');
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

        return view('GrupoTrabajo.show')->with('grupo', $grupo);
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

        $grupo -> CodigoGrupo = $request -> input('codigo');
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
