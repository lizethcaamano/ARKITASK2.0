@extends('Templates.administrador')
@section('administrador_contenido')
<br><br><br><br><br><br>
<center>
<div class="card" style="width: 30rem;">
<div class="card-header">
        <h1>Datos Actividad # {{$actividad->IdActividad}}</h1>
</div>

<h3>
<<<<<<< HEAD

   <li>{{$actividad->Descripcion}}</li>
   <li>{{$actividad->FechalimitedeEntrega}}</li>
   <li>{{$actividad->Estado}}</li>
=======
    <ul class="list-group list-group-flush">
   Nombre Actividad: <strong><li class="list-group-item">{{$actividad->NombreActividad}}</li></strong>
   Descripción Actividad: <strong><li class="list-group-item">{{$actividad->Descripcion}}</li></strong>
   Fecha de publicación: <strong><li class="list-group-item">{{$actividad->FechadePublicacion}}</li></strong>
   Fecha limite de entrega: <strong><li class="list-group-item">{{$actividad->FechalimitedeEntrega}}</li></strong>
   Estado Actividad: <strong><li class="list-group-item">{{$actividad->Estado}}</li></strong>
    </ul>
    <a class="btn btn-warning" href="{{url('actividades')}}">Volver</a>
>>>>>>> 87840d3af5e7ed022ebf21845bb5fea63d6ff7d2

</h3>
</div>

</center>
@endsection