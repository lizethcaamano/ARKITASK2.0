<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Entregables;
use App\Actividades;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EntregablesEncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Entregables = Entregables::paginate(15);
        return view('Gerente.index')
                    ->with("Entregables", $Entregables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Usuarios = User :: all();
        $Actividades = Actividades :: all();
        return view('Gerente.createEntregable')
        ->with("Actividades", $Actividades)->with("Usuarios", $Usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reglas = [
            "urlarchivo" => 'required',

        ];


    $mensajes = [
            "required" => "Campo requerido",
            "alpha" => "por favor ingresar solo letras",

    ];

        $validador = Validator::make($request->all(), $reglas, $mensajes);


        if($validador->fails()){

                return redirect('entregables/create')
                       ->withErrors($validador)
                       ->withInput();

        }


        $nuevoentregable = new Entregables();
        $nuevoentregable->fechaEntrega = Carbon::today();
        $nuevoentregable->IdActividadesFK = $request->input('actividades');
        if($request->hasFile('urlarchivo')){
            $file = $request->file('urlarchivo');
            $destinationPath = 'images/actividades/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('urlarchivo')->move($destinationPath, $filename);
            $nuevoentregable->URLarchivo = $destinationPath . $filename;
        }

        $nuevoentregable->comentariosEntrega = $request->input('comentario');
        $nuevoentregable->Estado = '1';
        $nuevoentregable->save();

    return redirect('gerente/Entregables')
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

        return view('Gerente.showEntregable') ->with('entregable', $entregable);
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

        return view('Gerente.editEntregable')
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
        $entregable->fechaEntrega = $request->input('fechaEntrega');


        if($request->hasFile('urlarchivo')){
            $file = $request->file('urlarchivo');
            $destinationPath = 'images/actividades/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('urlarchivo')->move($destinationPath, $filename);
            $entregable->URLarchivo = $destinationPath . $filename;
        }
        $entregable->comentariosEntrega = $request->input('comentario');
        $entregable->Estado = $request->input('estado');
        $entregable->save();

    return redirect('gerente/Entregables')
          ->with("mensaje_exito", "Entregable  actualizado");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($entregables)
    {
        $entregables = Entregables::find($entregables)->delete();
        return redirect()->route('Gerente.index')
            ->with('mensaje_exito', ' archivo eliminando correctamente ');
    }

    public function habilitar($IdArchivo){
        $entregables = Entregables::find($IdArchivo);
        switch($entregables->Estado){
            case null:
                $entregables->Estado=1;
                $entregables->save();
                $mensaje_exito = 'Entregable Aceptado';
                break;
            case 1:
                $entregable = Entregables::find($IdArchivo);
                $entregables->Estado=2;
                $entregables->save();
                $mensaje_exito = 'Entregable Aceptado';
                return view('Gerente.rechazo')->with('entregable', $entregable);
                break;
            case 2:
                $entregables->Estado=1;
                $entregables->save();
                $mensaje_exito = 'Entregable Aceptado';
                break;
        }
        return redirect('gerente/Entregables')->with('mensaje_exito', $mensaje_exito);
    }
}
