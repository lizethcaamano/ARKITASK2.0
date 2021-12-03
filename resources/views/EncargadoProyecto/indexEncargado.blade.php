@extends('Templates.Encargado')
@section('administrador_contenido')
<<<<<<< HEAD
=======



<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Listado Encargados</li>
    </ol>
  </nav>

>>>>>>> 95d2f6b93b7502700fb66dded6ede5ffb477248f
<center><h1 class="text-lefth">Lista de Encargados</h1></center>
<!-- @if (session("mensaje_exito"))
    <div>
        <strong>
            {{ session("mensaje_exito") }}
        </strong>
    </div>
@endif -->
<<<<<<< HEAD
<table class="table table-dark">
    <thead>
        <tr class="table table-primary">
            <th>Fecha de Inicio</th>
            <th>Fecha final</th>
            <th>Observaciones</th>
            <th>Id Proyecto</th>
            <th>Id Usuario</th>
        </tr>
    </thead>
    <tbody >
    @foreach($encargados as $encargado )
=======
>>>>>>> 95d2f6b93b7502700fb66dded6ede5ffb477248f


<<<<<<< HEAD
            <td>{{ $encargado->FechaInicio}}</td>
            <td>{{ $encargado->FechaFinal}}</td>
            <td>{{ $encargado->Observaciones}}</td>
            <td><a class="btn btn-outline-secondary" href="{{ url('EncargadoProyecto/'.$encargadoProyecto->IdEncargado)}}">Ver Detalles </a></td>
           <td> <a class="btn btn-outline-info" href="{{ url('EncargadoProyecto/'.$encargadoProyecto->IdEncargado.'/edit')}}"> Actualizar </a></td>
=======

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Lista de Entregables</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">


                    <table id="example" class="display min-w850">
                        <thead>
                            <tr class="table">
                             <th scope="col"><h3>Fecha de Inicio</h3></th>
                                <th><h3>Fecha final</h3></th>
                                <th><h3>Id Proyecto</h3></th>
                                <th><h3>Id Usuario</h3></th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach($encargados as $encargado )
>>>>>>> 95d2f6b93b7502700fb66dded6ede5ffb477248f

                            <tr>

                                    <td>{{ $encargado->FechaInicio}}</td>
                                    <td>{{ $encargado->FechaFinal}}</td>

                                    <td><a class="btn btn-outline-secondary" href="{{ url('Encargado/'.$encargado->IdEncargado)}}">Ver Detalles </a></td>
                                   <td> <a class="btn btn-outline-info" href="{{ url('Encargado/'.$encargado->IdEncargado.'/edit')}}"> Actualizar </a></td>



                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<a  Class = "btn btn-info " href="{{ url('EncargadoProyecto/create') }}">Nuevo Encargado</a>

@endsection
