@extends('Templates.administrador')
@section('administrador_contenido')
<center><h1 class="text-lefth">Lista de Encargados</h1></center>
<!-- @if (session("mensaje_exito"))
    <div>
        <strong>
            {{ session("mensaje_exito") }}
        </strong>
    </div>
@endif -->
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

    <tr>

            <td>{{ $encargado->FechaInicio}}</td>
            <td>{{ $encargado->FechaFinal}}</td>
            <td>{{ $encargado->Observaciones}}</td>
            <td><a class="btn btn-outline-secondary" href="{{ url('EncargadoProyecto/'.$encargadoProyecto->IdEncargado)}}">Ver Detalles </a></td>
           <td> <a class="btn btn-outline-info" href="{{ url('EncargadoProyecto/'.$encargadoProyecto->IdEncargado.'/edit')}}"> Actualizar </a></td>



    </tr>
    @endforeach
    </tbody>
</table>

 {{ $encargados->links() }}

<a  Class = "btn btn-info " href="{{ url('EncargadoProyecto/create') }}">Nuevo Encargado</a>

@endsection
