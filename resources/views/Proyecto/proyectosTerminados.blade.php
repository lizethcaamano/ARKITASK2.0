@extends('Templates.administrador')
@section('administrador_contenido')



<link rel="stylesheet" href="{{ asset ('css/proyecto.css')}}">
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