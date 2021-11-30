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
<table class="table table-striped">
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

    <tr>

            <td>{{ $encargado->FechaInicio}}</td>
            <td>{{ $encargado->FechaFinal}}</td>
        
            <td><a class="btn btn-outline-secondary" href="{{ url('Encargado/'.$encargado->IdEncargado)}}">Ver Detalles </a></td>
           <td> <a class="btn btn-outline-info" href="{{ url('Encargado/'.$encargado->IdEncargado.'/edit')}}"> Actualizar </a></td>



    </tr>
    @endforeach
    </tbody>
</table>

 {{ $encargados->links() }}

<a class="btn btn-primary" href="{{ url('Encargado/create') }}">Nuevo Encargado</a>

@endsection
