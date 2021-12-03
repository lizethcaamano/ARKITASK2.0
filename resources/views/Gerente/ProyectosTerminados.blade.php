@extends('Templates.gerente')
@section('administrador_contenido')


<link rel="stylesheet" href="{{ asset ('css/proyecto.css')}}">


<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('proyecto')}}">Generalidades Proyectos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Documentación Proyectos Terminados</li>
    </ol>
  </nav>

<div class="container">
@foreach ($proyectosT as $proyecto)
        <div class="card__perfil">
            <div class="card__nombre">
               <CENTER> <h3>{{ $proyecto->NombreProyecto}}</h3></CENTER>
                <p> Codigo: {{ $proyecto->CodigoProyecto}}</p>
            </div>
            <hr>
            <div class="card__descripcion">
                <p>Fecha de entrega: {{ $proyecto->FechaEntrega}}</p>
                <p>Fecha de Realizacion: {{ $proyecto->FechaRealizacion}}</p>
                <p>Tipo de Proyecto: </p>
                <p>Estado: {{ $proyecto->Estado}}</p>

            </div>
            <hr>
            <div class="card__button">
            <a href="{{ url('proyecto/'.$proyecto->IdProyecto)}}">Ver detalles</a>

            </div>

        </div>
        @endforeach
@endsection
