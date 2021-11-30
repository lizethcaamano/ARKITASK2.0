@extends('Templates.administrador')
@section('administrador_contenido')
<link rel="stylesheet" href="{{ asset ('css/encargado.css')}}">

<div class="container" >
<center><h1>Encargado de Proyecto: </h1></center><br><br>  <hr>
<strong><h3>Fecha de inicio:</h3>  {{$encargado->FechaInicio}}</strong><br><br>  <hr>
<strong><h3>Fecha final:</h3> {{$encargado->FechaFinal}}</strong><br><br>  <hr>
<strong><h3>Observaciones:</h3> {{$encargado->Observaciones}}</strong>
    </div>
@endsection
