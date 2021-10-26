<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\GrupoTrabajo;
use Illuminate\Http\Request;
use App\Proyecto;

use App\Http\Requests\ProyectoRequest;
use App\TipoProyecto;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(6);
        $proyectos-> each(function($proyectos){
            $proyectos->TipoProyecto;
            $proyectos->grupo;
            $proyectos->catalogo;

        });
        return view ('proyecto.indexproyecto')->with("proyectos", $proyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipopro=TipoProyecto::all();
        $grupo = GrupoTrabajo::all();
        $catalogo = Catalogo::all();

        return view('Proyecto.createProyecto', compact('tipopro', 'grupo', 'catalogo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {

        //crear el nuevo recurso clienteDB::delete('delete users where name = ?', ['John'])
        $nuevoproyecto = new Proyecto();
        $nuevoproyecto->CodigoProyecto = $request->input("codigo");
        $nuevoproyecto->NombreProyecto = $request->input("nombre");
        $nuevoproyecto->FechaRealizacion = $request->input("fechar");
        $nuevoproyecto->FechaEntrega = $request->input("fechae");
        $nuevoproyecto->IdTipoProyectoFK = $request->input("tipopro");
        $nuevoproyecto->IdGrupoFK = $request->input("grupo");


        $nuevoproyecto->save();
     //redireccionamiento  a una ruta especifica

     return redirect ('proyecto')->with('Creado','Se ha creado exitosamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto =Proyecto::find($id);
        return view('proyecto.verProyecto')
        ->with("proyecto",$proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipopro=TipoProyecto::all();
        $proyecto = Proyecto::find($id);
        $grupo = GrupoTrabajo::all();
        return view('proyecto.editProyecto', compact('proyecto', 'tipopro', 'grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyectoRequest $request, $id)
    {



        $proyecto= Proyecto::find($id);
        //actualizar el estado del recurso
        //en virtud de los datos que vengan de los formularios

        $proyecto->CodigoProyecto = $request->input("codigo");
        $proyecto->NombreProyecto = $request->input("nombre");
        $proyecto->FechaRealizacion = $request->input("fechar");
        $proyecto->FechaEntrega = $request->input("fechae");
        $proyecto->IdTipoProyectoFK = $request->input("tipopro");
        $proyecto->IdGrupoFK = $request->input("grupo");
        $proyecto->save();
        return redirect("proyecto")
        ->with("mensaje", "Proyecto actualizado");
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
