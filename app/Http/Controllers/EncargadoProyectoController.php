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
        return view ('EncargadoProyecto.indexProyectoEncargado')
        ->with("encargados",$encargados);
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
        return view('EncargadoProyecto.createProyectoEncargado');
        return view('EncargadoProyecto.createProyectoEncargado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {

        $nuevoencargado = new EncargadoProyecto();
        $nuevoencargado->FechaInicio = $request->input("fechaInicio");
        $nuevoencargado->FechaFinal = $request->input("fechaFinal");
        $nuevoencargado->Observaciones = $request->input("observaciones");



        //crear el nuevo recurso clienteDB::delete('delete users where name = ?', ['John'])
        $nuevoproyecto = new Proyecto();
        $nuevoproyecto->CodigoProyecto ="$Proyecto";
        $nuevoproyecto->NombreProyecto = $request->input("nombre");
        $nuevoproyecto->FechaRealizacion = $request->input("fechar");
        $nuevoproyecto->FechaEntrega = $request->input("fechae");
        $nuevoproyecto->IdTipoProyectoFK = $request->input("tipopro");
        $nuevoproyecto->IdGrupoFK = $request->input("grupo");
        $nuevoproyecto->IdCatalogoFK = $request->input("catalogo");
        $nuevoproyecto->Estado ="Proceso";
        $nuevoproyecto->save();
     //redireccionamiento  a una ruta especifica

     return redirect ('encargado/Proyecto/crear')->with('Creado','Se ha creado exitosamente');
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
        return view('Proyecto.verProyecto')
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
        $tipopro=TipoProyecto::all($id);
        $proyecto = Proyecto::find($id);
        $grupo = GrupoTrabajo::all();
        $catalogo = Catalogo::all();
        return view('EncargadoProyecto.editProyectoEncargado')->with('tipopro',$tipopro)->with( 'grupo',$grupo)->with('catalogo',$catalogo)->with('proyecto',$proyecto);
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
        return redirect("encargado/Proyecto")
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
