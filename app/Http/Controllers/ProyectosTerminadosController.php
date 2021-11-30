<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use DB;
use Illuminate\Support\Facades\Hash;

class ProyectosTerminadosController extends Controller
{
    public function index()
    {
        $proyectosT = DB::table('proyecto')
        ->where ('Estado','=','Terminado')
        ->get ();
        return view ('proyecto.proyectosTerminados')
        ->with("proyectosT",$proyectosT);
    }
}
