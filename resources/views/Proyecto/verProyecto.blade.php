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

<<<<<<< HEAD
<h1>{{$proyectos->NombreProyecto}} </h1><br><br><br>
=======
<h1 class="tituloproyecto">{{$proyecto->NombreProyecto}} </h1><br><br><br>
>>>>>>> 02eace5ed143c5b250da821217b25c0cdec27de2


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
