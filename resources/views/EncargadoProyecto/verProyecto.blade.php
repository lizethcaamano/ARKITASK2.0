@extends('Templates.gerente')
@section('administrador_contenido')
<link rel="stylesheet" href="{{ asset ('css/crearProyecto.css')}}">

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('proyecto')}}">Generalidades Proyectos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detalles Proyecto</li>
    </ol>
  </nav>


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
