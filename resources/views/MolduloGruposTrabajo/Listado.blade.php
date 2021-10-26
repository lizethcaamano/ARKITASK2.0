@extends('Templates.administrador')
@section('administrador_contenido')

<table class="table table-primary">
    <thead>
        <tr>
            <th>Codigo Grupo </th>
            <th>Fecha de Inicio</th>
           <th>Fecha de desactivacion</th>
           <th>Ver detalles</th>
           <th>Actualizar</th>

           <th>Cambiar estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupos as $grupo)

        <tr>
            <td>{{ $grupo->CodigoGrupo}} </td>
            <td>{{ $grupo->FechaInicio}} </td>
            <td>{{ $grupo->FechaDesactivacion}} </td>
            <td> </td>
            <td><a href="{{ url('Grupo/'.$grupo->IdGrupo)}}">Ver detalles</a></td>
            <td>  <a href="{{url('Grupo/'.$grupo->IdGrupo.'/edit' )}}">Actualizar</a></td>

            <td> </td>

        </td>
        </tr>

        @endforeach
    </tbody>
</table>
<a href="{{url('Grupo/create')}}" class="btn btn-primary">Nuevo Proyecto</a>


@endsection
