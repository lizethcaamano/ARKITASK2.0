<?php

namespace App\Http\Controllers;

use App\Entregables;
use Illuminate\Http\Request;

class EntregablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Entregables = Entregables::paginate(15);
        return view('ModuloEntregables.index')
                    ->with("Entregables", $Entregables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ModuloEntregables.createEntregable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nuevoentregable = new Entregables();
        $nuevoentregable -> URLarchivo = $request -> input("urlarchivo");
        $nuevoentregable ->save();

    return redirect('entregables')
          ->with("mensaje_exito", "Archivo registrado exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $entregable = Entregables::find($id);

        return view('ModuloEntregables.showEntregable') ->with('entregable', $entregable);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entregable = Entregables::find($id);

        return view('ModuloEntregables.editEntregable')
                ->with('entregable', $entregable);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $entregable = Entregables::find($id);

        $entregable->URLarchivo = $request->input('urlarchivo');
        $entregable->Estado = $request->input('estado');
        $entregable->save();

    return redirect('entregables')
          ->with("mensaje_exito", "Entregable  actualizado");
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
