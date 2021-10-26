@extends('Templates.administrador')
@section('administrador_contenido')
    <center>
<h1>{{$proyecto->NombreProyecto}} </h1><br>

<div class="container">
<h3><strong>Codigo: {{$proyecto->CodigoProyecto}}</strong></h3>
<h3><strong>Fecha de Realizacion: {{$proyecto->FechaRealizacion}}</strong></h3>
<h3><strong>Fecha de Entrega: {{$proyecto->FechaEntrega}}</strong></h3>
<h3><strong>Estado: {{$proyecto->Estado}}</strong></h3></center>
</div>

@endsection
