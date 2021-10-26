@extends('Templates.administrador')
@section('administrador_contenido')

<center>
    <h1>Grupo: {{$grupo->CodigoGrupo}} </h1><br>

    <div class="container">
    <h3><strong>Fecha de Inicio: {{$grupo->FechaInicio}}</strong></h3>
    <h3><strong>Fecha de  Desactivacion: {{$grupo->FechaDesactivacion}}</strong></h3>
    </center>
    </div>

@endsection
