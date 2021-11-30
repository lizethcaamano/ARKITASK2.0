<?php

namespace App\Http\Controllers;

use App\Asistencia;
use App\Exports\AsistenciasExport;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\AsistenciaRequest;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $asistencias = Asistencia::all();
        $asistencias-> each(function($asistencias){
            $asistencias->usuarios;

        });
        //return dd($asistencias);

        return view('ModuloAsistencia.Listado')->with('asistencias', $asistencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados= User::all();
        return view('ModuloAsistencia.Crear')->with('empleados', $empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsistenciaRequest $request)
    {
        /* Iniciamos proceso para crear una nueva asistencia */
        $asistencianew = new Asistencia();

        $asistencianew -> FechaIngreso= $request -> input('fechaingreso');
        $asistencianew -> HoraIngreso= $request -> input('horaingreso');
        $asistencianew -> FechaSalida= $request -> input('fechasalida');
        $asistencianew -> HoraSalida= $request -> input('horasalida');
        $asistencianew -> IdUsuarioFK = $request -> input('empleado');
        $asistencianew ->save();

        return redirect('asistencia');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        return view('ModuloAsistencia.Detalles')->with('asistencia', $asistencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);

        return view('ModuloAsistencia.Editar')->with('asistencia',$asistencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsistenciaRequest $request, $id)
    {
        $asistencia = Asistencia::find($id);



        $asistencia -> FechaHoraIngreso= $request -> input('ingreso');
        $asistencia -> FechaHoraSalida= $request -> input('salida');
        $asistencia -> IdUsuarioFK= $request -> input('empleado');
        $asistencia ->save();

        return redirect('asistencia')->with('Actualizado', 'La asistencia ha sido actualizada :)');
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

     public function reporte(){
        return Excel::download(new AsistenciasExport, 'Asistencia.xlsx');
     }



}
