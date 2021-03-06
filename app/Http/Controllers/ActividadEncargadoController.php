<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Actividades;
use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ActividadesRequest;



class ActividadEncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Proyectos = Proyecto :: all();
        $Actividades = Actividades::paginate(15);
        return view('EncargadoProyecto.calendar')
                    ->with("Actividades", $Actividades)->with("Proyectos", $Proyectos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Proyectos = Proyecto :: all();
        return view('EncargadoProyecto.index', compact('Proyectos'));
    }

    public function store(ActividadesRequest $request)
    {

         $nuevaactividad = new Actividades();
         $nuevaactividad -> NombreActividad = $request -> input("nombreA");
         $nuevaactividad -> Descripcion = $request -> input("descripcion");
         $nuevaactividad -> FechadePublicacion = Carbon::today();
         $nuevaactividad -> FechaLimitedeEntrega = $request -> input("fechaLim");
         $nuevaactividad -> Estado = "Activo";
         $nuevaactividad -> IdProyectoFK = $request -> input("proyecto");
         $nuevaactividad ->save();
        if($nuevaactividad -> FechaLimitedeEntrega<$nuevaactividad -> FechadePublicacion ){
             echo("La fecha de entrega no puede ser menor a la fecha actual");
         }
        else{
            echo ("Guardado con exito");
        }
      return redirect('encargado/Actividades')
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

        return view('EncargadoProyecto.showActividad') ->with('actividad', $actividad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Proyectos = Proyecto :: all();
        $actividad = Actividades::find($id);

        return view('EncargadoProyecto.editActividad')
                ->with('actividad', $actividad)->with("Proyectos", $Proyectos);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActividadesRequest $request, $id)
    {

        $actividad = Actividades::find($id);
        $actividad = new Actividades();
        $actividad -> NombreActividad = $request -> input("nombreA");
        $actividad -> Descripcion = $request -> input("descripcion");
        $actividad -> FechadePublicacion = Carbon::today();
        $actividad -> FechaLimitedeEntrega = $request -> input("fechaLim");
        $actividad -> IdProyectoFK = $request -> input("proyecto");
        $actividad -> Estado = $request -> input("estado");
        $actividad ->save();

    return redirect('encargado/Actividades')
          ->with("mensaje_exito", "Actividad  actualizada");

    }

    /**
     * Remove the specified resource froms storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
