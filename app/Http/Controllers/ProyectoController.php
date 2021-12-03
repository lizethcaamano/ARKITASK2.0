<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\GrupoTrabajo;
use Illuminate\Http\Request;
use App\Proyecto;
use Illuminate\Support\Str;
use App\Http\Requests\ProyectoRequest;
use App\TipoProyecto;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use DB;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(Auth::check()){


<<<<<<< HEAD
          

=======
>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
        $proyectos = Proyecto:: all();
   
        $proyectos-> each(function($proyectos){
            $proyectos->TipoProyecto;
            $proyectos->grupo;
            $proyectos->catalogo;

           

        }
   
   

        );
        return view ('proyecto.indexproyecto')->with("proyectos", $proyectos);

     }else{
         return route('login');
     }
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

        return view('Proyecto.createProyecto')->with('tipopro',$tipopro)->with( 'grupo',$grupo)->with('catalogo',$catalogo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {
//$array = [1,2,3,4,5,6,7,8,9];
$Proyecto= Str::random(4);




        //crear el nuevo recurso clienteDB::delete('delete users where name = ?', ['John'])
        $nuevoproyecto = new Proyecto();
        $nuevoproyecto->CodigoProyecto ="Proy$Proyecto";
        $nuevoproyecto->NombreProyecto = $request->input("nombre");
        $nuevoproyecto->FechaRealizacion = $request->input("fechar");
        $nuevoproyecto->FechaEntrega = $request->input("fechae");
        $nuevoproyecto->IdTipoProyectoFK = $request->input("tipopro");
        $nuevoproyecto->IdGrupoFK = $request->input("grupo");
        $nuevoproyecto->IdCatalogoFK = $request->input("catalogo");
        $nuevoproyecto->Descripcion = $request->input("descripcion");
        $nuevoproyecto->Estado ="Proceso";


        $nuevoproyecto->save();
     //redireccionamiento  a una ruta especifica

     return redirect ('gerente/Proyecto')->with('Creado','Se ha creado exitosamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $proyectos =Proyecto::find($id);

        $TipoProyecto=TipoProyecto::find($proyectos);

        $grupo= GrupoTrabajo::find($proyectos);
        
        
        return view('proyecto.verProyecto')
        ->with("proyectos",$proyectos) ->with("grupo",$grupo)->with("Tipopro",$TipoProyecto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $grupo = GrupoTrabajo::all();
        $proyecto = Proyecto::find($id);
    
      
        $tipopro=TipoProyecto::all();
        
       
        $catalogo = Catalogo::all();
        return view('proyecto.editProyecto')->with('tipopro',$tipopro)->with( 'grupo',$grupo)->with('catalogo',$catalogo)
        ->with('proyecto',$proyecto);
        
        
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
        $proyecto->Descripcion = $request->input("descripcion");
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
