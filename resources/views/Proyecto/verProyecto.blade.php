@extends('Templates.administrador')
@section('administrador_contenido')
<div class="container">

<h1>{{$proyectos->NombreProyecto}} </h1><br><br><br>


<h3><strong>Codigo:</h3> {{$proyectos->CodigoProyecto}}</strong><br><br><br>
<h3><strong>Fecha de Realizacion:</h3> {{$proyectos->FechaRealizacion}}</strong><br><br><br>
<h3><strong>Fecha de Entrega:</h3> {{$proyectos->FechaEntrega}}</strong><br><br><br>
<h3><strong>Estado:</h3> {{$proyectos->Estado}}</strong><br><br><br>

@foreach ($Tipopro as $tipo)
<h3><strong value="{{$proyectos->IdTipoProyectoFK}}">Tipo de Proyecto: {{$tipo->NombreTipoProyecto}}</h3></strong><br><br>
@endforeach

@foreach ($grupo as $grupo)
<h3><strong value="{{$proyectos->IdgrupoFK}}">Grupo: {{$grupo->CodigoGrupo}}</h3></strong><br><br>
@endforeach
<!-- <h3><strong>Encargado de Proyecto: </h3></strong><br><br> -->
<h3><strong>Descripcion:  {{$proyectos->Descripcion}}</h3></strong>

<a class="btn btn-primary" href="{{url('proyecto/'. $proyectos->IdProyecto.'/edit')}}">Editar</a>
</div>

@endsection
