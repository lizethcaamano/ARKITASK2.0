<?php

namespace App\Http\Controllers;
use App\EncargadoProyecto;
use App\Proyecto;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\encargadoProyectoRequest;


class EncargadoProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados = EncargadoProyecto::paginate(6);
        $encargados->each(function($encargados){
            $encargados->EncargadoProyecto;
            $encargados->usuario;
        });
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
    //     $User=  
    //     DB::table('AsignarRol')
    //    ->where ('IdRolFK','=','3')
    //    ->get ();
        $usuario= User::all();
      

       
        $proyecto= DB::table('proyecto')
        ->where ('Estado','=','Proceso')
        ->get ();

     
      
;
        return view('encargadoProyecto.createEncargado')->with('proyecto',$proyecto)->with('usuario',$usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(encargadoProyectoRequest $request)
    {
        
       
        
        $nuevoencargado = new EncargadoProyecto();
        $nuevoencargado->FechaInicio = $request->input("fechaInicio");
        $nuevoencargado->FechaFinal = $request->input("fechaFinal");
        $nuevoencargado->Observaciones = $request->input("observaciones");
        $nuevoencargado->IdProyectoFK= $request->input("idproyectofk");
        $nuevoencargado->IdUsuarioFK= $request->input("idusuariofk");

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
        $encargado =EncargadoProyecto::find($id);
        return view('encargadoProyecto.showEncargado')
        ->with("encargado",$encargado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargado = EncargadoProyecto::find($id);    
        return view('encargadoProyecto.editEncargado')->with('encargado',$encargado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(encargadoProyectoRequest $request, $id)
    {
        $encargado= EncargadoProyecto::find($id);
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
