<?php

namespace App\Http\Controllers;
use App\EncargadoProyecto;
use Illuminate\Http\Request;


class EncargadoProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados = Encargado::paginate(6);
        return view ('encargadoProyecto.indexEncargado')
        ->with("encargados",$encargados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encargadoProyecto.createEncargado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoencargado = new Encargado();
        $nuevoencargado->FechaInicio = $request->input("fechaInicio");
        $nuevoencargado->FechaFinal = $request->input("fechaFinal");
        $nuevoencargado->Observaciones = $request->input("observaciones");
    
        $nuevoencargado->save();
     //redireccionamiento  a una ruta especifica 
     return redirect ('Encargado')->with('Creado','Se ha creado el encargado de proyectos  exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encargado =Encargado::find($id);
        return view('encargadoProyecto.showEncargado')
        ->with("encargad",$encargad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargado = Encargado::find($id);    
        return view('encargadoProyecto.editEncargado')->with('encargado',$encargado);
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
        $encargado= Encargado::find($id);
        //actualizar el estado del recurso 
        //en virtud de los datos que vengan de los formularios 
  
        $encargado->FechaInicio = $request->input("fechaInicio");
        $encargado->FechaFinal = $request->input("fechaFinal");
        $encargado->Observaciones = $request->input("observaciones");
        
        $encargado->save();
        return redirect("Encargado")
        ->with("mensaje", "El encargado  ha sido actualizado");
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
