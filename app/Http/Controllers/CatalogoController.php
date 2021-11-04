<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Catalogo;
use Illuminate\Http\Request;
use App\Http\Requests\CatalogoRequest;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogos = Catalogo::paginate(10);
        return view('ModuloCatalogo.Listado')->with('catalogos', $catalogos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ModuloCatalogo.Crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogoRequest $request)
    {

        $reglas=[
            "participantes"=> 'required|alpha|max:10',
            "empresa"=> 'required|alpha|max:10',
            "area"=> 'required|alpha|max:10'

        ];

        $mensajes = [
            "required"=>"Campo requerido",
            "alpha"=>"solo letras",
            "max"=>"Debe tener maximo : :max caracteres"
        ];

        $validador =Validator::make($request->all(),$reglas,$mensajes);


     
        if ($validador->fails()){
              
            return redirect ('catalogo/create')->withErrors($validador)


            
           
              
            ->withInput();
        }

        $catalogonew= new Catalogo();

        $catalogonew -> NombreParticipantes=$request->input('participantes');
        $catalogonew -> EmpresaContratante=$request->input('empresa');
        $catalogonew -> Area=$request->input('area');
        $catalogonew ->save();

        return redirect('catalogo')->with('catalogo_creado', 'El catálogo se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catalogo = Catalogo::find($id);

        return view('ModuloCatalogo.Detalles')->with('catalogo', $catalogo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogo = Catalogo::find($id);

        return view('ModuloCatalogo.Editar')->with('catalogo', $catalogo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatalogoRequest $request, $id)
    {
        $catalogo = Catalogo::find($id);

        $catalogo -> NombreParticipantes=$request->input('participantes');
        $catalogo -> EmpresaContratante=$request->input('empresa');
        $catalogo -> Area=$request->input('area');
        $catalogo ->save();

        return redirect('catalogo')->with('catalogo_actualizado', 'El catálogo se ha creado con éxito');
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
