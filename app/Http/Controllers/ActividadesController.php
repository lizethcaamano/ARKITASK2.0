<?php

namespace App\Http\Controllers;

use App\Actividades;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividades::paginate(6);
        return view('ModuloActividades.index')
                    ->with("actividades", $actividades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ModuloActividades.createActividad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        

 
  
         $nuevaactividad = new Actividades();
         $nuevaactividad -> NombreActividad = $request -> input("NombreActividad");
         $nuevaactividad -> Descripcion = $request -> input("descripcion");
         $nuevaactividad -> FechadePublicacion = $request -> input("FechadePublicacion");
         $nuevaactividad -> FechaLimitedeEntrega = $request -> input("FechaLimitedeEntrega");
         $nuevaactividad ->save();

     return redirect('actividades')
           ->with("mensaje_exito", "Actividad registrada exitosamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $actividad = Actividades::find($id);

        return view('ModuloActividades.showActividad') ->with('actividad', $actividad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $actividad = Actividades::find($id);

        return view('ModuloActividades.editActividad')
                ->with('actividad', $actividad);
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


        
       


        $actividad = Actividades::find($id);

        $actividad->NombreActividad = $request->input('NombreActividad');
        $actividad->Descripcion = $request->input('descripcion');
        $actividad->FechaLimitedeEntrega = $request->input('FechalimitedeEntrega');
        $actividad->Estado = $request->input('Estado');
        $actividad->save();

    return redirect('actividades')
          ->with("mensaje_exito", "Actividad  actualizada");

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
