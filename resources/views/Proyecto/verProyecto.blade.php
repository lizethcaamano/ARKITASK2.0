@extends('Templates.administrador')
@section('administrador_contenido')
<link rel="stylesheet" href="{{ asset ('css/crearProyecto.css')}}">
<div class="container">

<h1 class="tituloproyecto">{{$proyecto->NombreProyecto}} </h1><br><br><br>


<h3><strong>Codigo:</h3> {{$proyecto->CodigoProyecto}}</strong><br><br><br>
<h3><strong>Fecha de Realizacion:</h3> {{$proyecto->FechaRealizacion}}</strong><br><br><br>
<h3><strong>Fecha de Entrega:</h3> {{$proyecto->FechaEntrega}}</strong><br><br><br>
<h3><strong>Estado:</h3> {{$proyecto->Estado}}</strong><br><br><br>
<h3><strong>Grupo:</h3></strong><br><br>
<h3><strong>Encargado de Proyecto:</h3></strong><br><br>
<h3><strong>Descripcion:</h3></strong>

<a class="btn btn-primary" href="{{url('proyecto/'. $proyecto->IdProyecto.'/edit')}}">Editar</a>
</div>

@endsection
