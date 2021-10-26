@extends('Templates.administrador')
@section('administrador_contenido')
<h1>
    Empresa de Contrato {{$catalogo->EmpresaContratante}}
</h1>

<ul class="list-group">
    <li class="list-group-item list-group-item-action list-group-item-danger">Área territorio: {{$catalogo->Area}}</li>
    <li class="list-group-item list-group-item-action list-group-item-danger">Participantes: {{ $catalogo->NombreParticipantes}}</li>
    </ul>
@endsection
