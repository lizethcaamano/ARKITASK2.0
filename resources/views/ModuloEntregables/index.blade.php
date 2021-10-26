@extends('Templates.administrador')
@section('administrador_contenido')

<center><h1 class="text-info font-blockquote">Listado de Entregables</h1></center>
@if (session("mensaje_exito"))
    <div>
        <strong>
            {{ session("mensaje_exito") }}
        </strong>
    </div>
@endif
<table class="table table-dark">
    <thead>
        <tr class=" table table-danger">
            <th>Usuario</th>
            <th>Actividad</th>
            <th >Fecha de entrega</th>
            <th >Url de entregable</th>
            <th >Estado</th>
            <th >Detalles</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody >
        @foreach ( $Entregables as $entregables )

        <tr>
            <td>{{ $entregables->IdUsuarioFK}}</td>
            <td>{{ $entregables->IdActividadesFK}}</td>
            <td>{{ $entregables->FechaEntrega}}</td>
            <td>{{ $entregables->URLarchivo}}</td>
            <td>{{ $entregables->Estado}}</td>
            <td><a class="btn btn-outline-secondary" href="{{ url('entregables/'.$entregables->IdArchivo)}}">Detalles </a></td>
           <td> <a class="btn btn-outline-info" href="{{ url('entregables/'.$entregables->IdArchivo. '/edit')}}"> Actualizar </a></td>

        </tr>

        @endforeach
    </tbody>
</table>

<a  Class = "btn btn-info" href="{{ url('entregables/create') }}">Nuevo Archivo</a>

@endsection
