@extends('Templates.Encargado')
@section('administrador_contenido')
<h1>Encargado de Proyecto: </h1>
    {{$encargado->codigoEncargado}}
    {{$encargado->fechaInicio}}
    {{$encargado->fechaFinal}}
    {{$encargado->observaciones}}
    {{$encargado->codigousuariofk}}
    {{$encargado->codigoproyectofk}}
@endsection
