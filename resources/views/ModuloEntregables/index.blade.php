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
            <th >Fecha de entrega</th>
            <th >Imagen entregable</th>
            <th >Comentarios</th>
            <th >Estado</th>
            <th >Detalles</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody >
        @foreach ( $Entregables as $entregables )

        <tr>

            <td>{{ $entregables->FechaEntrega}}</td>
            <td>
                <img src="{{ $entregables->URLarchivo }}" class="img-fluid"width="120px" height="120px"  max-width="120px" max-height="120px" alt="Sin vista previa">
            </td>
            <td>{{ $entregables->comentariosEntrega}}</td>
            <td>

                @switch($entregables->Estado)
                @case(null)
                <strong class="text">Por Asignar</strong>
                @break
                @case(1)
                <strong class="text-danger">Entregable Rechazado</strong>
                @break
                @case(2)
                <strong class="text-success">Entregable Aceptado</strong>
                <a href="{{ url('entregables/' . $entregables->IdArchivo . '/recahzado') }}">

                </a>
                @break
            @endswitch

           </td>
            <td><a class="btn btn-outline-secondary" href="{{ url('entregables/'.$entregables->IdArchivo)}}">Detalles </a></td>
            <td> <a class="btn btn-outline-info" href="{{ url('entregables/'.$entregables->IdArchivo. '/edit')}}"> Actualizar </a></td>


        @endforeach
    </tbody>
</table>

<a  Class = "btn btn-info" href="{{ url('entregables/create') }}">Nuevo Archivo</a>

@endsection
