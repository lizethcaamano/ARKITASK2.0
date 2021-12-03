@extends('Templates.administrador')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Todos los Grupos</li>
    </ol>
  </nav>


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
