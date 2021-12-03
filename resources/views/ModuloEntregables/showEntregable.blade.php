@extends('Templates.administrador')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('entregables')}}">Lista de Entregables</a></li>
      <li class="breadcrumb-item active" aria-current="page">Modificar Entregable</li>
    </ol>
  </nav>

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
   <li class="list-group-item">{{$entregable->Estado}}</li>
    </ul>
    <a class="btn btn-warning" href="{{url('entregables')}}">Volver</a>

</h3>
</div>

</center>
@endsection
