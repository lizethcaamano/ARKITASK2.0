@extends('Templates.administrador')
@section('administrador_contenido')
<h1>Listado de Catálagos</h1>

@if (session("catalogo_creado"))
    <strong>{{session("catalogo_creado")}}</strong>
@endif

@if (session("catalogo_actualizado"))
    <strong>{{session("catalogo_actualizado")}}</strong>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Integrantes</th>
            <th>Empresa Contratante</th>
            <th>Fecha de desactivación</th>
            <th>Área de</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($catalogos as $catalogo)

        <tr>
            <th>{{$catalogo -> NombreParticipantes}}</th>
            <th>{{$catalogo-> EmpresaContratante}}</th>
            <th>{{$catalogo -> Area}}</th>
            <th><a href="{{url('catalogo/'. $catalogo->IdCatalogo)}}">Detalles</a></th>
            <th><a href="{{url('catalogo/'. $catalogo->IdCatalogo.'/edit')}}">Editar</a></th>
        </tr>
        @endforeach
    </tbody>
    <a href="{{url('catalogo/create')}}">Nuevo Catálogo</a>
@endsection
