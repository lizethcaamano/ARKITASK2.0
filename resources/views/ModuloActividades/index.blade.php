@extends('Templates.administrador')
@section('administrador_contenido')

<center><h1 class="text-info font-blockquote">Listado de Actividades</h1></center>
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
            <th>Nombre</th>
            <th>Descripcion</th>
            <th >Fecha de Publicacion</th>
            <th >Fecha Limite Entrega</th>
            <th >Estado</th>
            <th >Detalles</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody >
        @foreach ( $actividades as $actividad )

        <tr>
            <td>{{ $actividad->NombreActividad}}</td>
            <td>{{ $actividad->Descripcion}}</td>
            <td>{{ $actividad->FechadePublicacion}}</td>
            <td>{{ $actividad->FechalimitedeEntrega}}</td>
            <td>{{ $actividad->Estado}}</td>
            <td><a class="btn btn-outline-secondary" href="{{ url('actividades/'.$actividad->IdActividad)}}">Detalles </a></td>
           <td> <a class="btn btn-outline-info" href="{{ url('actividades/'.$actividad->IdActividad. '/edit')}}"> Actualizar </a></td>

        </tr>

        @endforeach
    </tbody>
</table>

<a  Class = "btn btn-info" href="{{ url('actividades/create') }}">Nueva Actividad</a>

@endsection
