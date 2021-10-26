@extends('Templates.administrador')
@section('administrador_contenido')
<h1>
    Datos del Cliente {{$asistencia->IdUsuarioFK}}
</h1>

<ul class="list-group">
    <li class="list-group-item list-group-item-action list-group-item-danger">Horario Entrada {{$asistencia->FechaHoraIngreso}}</li>
    <li class="list-group-item list-group-item-action list-group-item-danger">Horario Salida {{ $asistencia->FechaHoraSalida}}</li>
    </ul>
@endsection
