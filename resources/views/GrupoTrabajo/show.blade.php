@extends('Templates.administrador')
@section('administrador_contenido')
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
