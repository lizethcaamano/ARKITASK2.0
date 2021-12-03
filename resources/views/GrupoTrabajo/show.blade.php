@extends('Templates.administrador')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('Grupo')}}">Todos los Grupos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detalles Grupo {{$grupo->CodigoGrupo}}</li>
    </ol>
  </nav>

    <center>
<h1>Grupo: {{$grupo->CodigoGrupo}} </h1><br>

<div class="container">
<strong><h3>Fecha de Inicio: {{$grupo->FechaInicio}}</strong></h3>
<h3><strong>Fecha de  Desactivacion: {{$grupo->FechaDesactivacion}}</strong></h3><h3>
<strong>Integrantes:</strong></h3>
@foreach ($Integrantes as $proyecto)

         <p value="{{$proyecto->IdGrupoFK}}"> {{$usuarios->Nombre}}    </p>
          @endforeach
<a class="btn btn-primary" href="{{url('Grupo/'.$grupo->IdGrupo.'/edit' )}}">Actualizar</a>
</center>
</div>

@endsection
