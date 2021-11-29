@extends('Templates.administrador')
@section('administrador_contenido')



<link rel="stylesheet" href="{{ asset ('css/grupo.css')}}">
<center><h1>Lista de Grupos de Proyecto</h1></center>




    
<div class="container">
@foreach ($grupos as $grupo)


   
        <div class="card__perfil ">
            <div class="card__nombre">
               <CENTER> <h3>Grupo de proyecto</h3></CENTER>
                <p> Codigo: {{ $grupo->CodigoGrupo}}</p>
            </div>
            <hr>
            <div class="card__descripcion">
                <p>Fecha de Inicio: {{ $grupo->FechaInicio}}</p>
                <p>Fecha de Finalización: {{ $grupo->FechaDesactivacion}}</p>
                <p>Proyecto: </p>
                
                
            </div>
            <hr>
            <div class="card__button">
            <a href="{{ url('Grupo/'.$grupo->IdGrupo)}}">Ver detalles</a>
           
            </div>
           
        </div>
 @endforeach
       

        </div>
    <a href="{{url('Grupo/create')}}" class="btn btn-primary">Nuevo grupo</a>
@endsection
