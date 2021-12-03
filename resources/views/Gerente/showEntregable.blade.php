@extends('Templates.gerente')
@section('administrador_contenido')
<br><br><br><br><br><br>
<center>
<div class="card" style="width: 30rem;">
<div class="card-header">
        <h1>Datos Entregable # {{$entregable->IdArchivo}}</h1>
</div>

<h3>
    <ul class="list-group list-group-flush">
   <li class="list-group-item">{{$entregable->FechaEntrega}}</li>
   <li class="list-group-item">{{$entregable->comentariosEntrega}}</li>
   <li class="list-group-item">
    @switch($entregable->Estado)
                   @case(1)
                   <strong class="text-danger">Entregable Rechazado</strong>
                   @break
                   @case(2)
                   <strong class="text-success">Entregable Aceptado</strong>
                   @break
               @endswitch    
    </li>
    </ul>
    <a class="btn btn-warning" href="{{url('gerente/Entregables/')}}">Volver</a>

</h3>
</div>

</center>
@endsection
