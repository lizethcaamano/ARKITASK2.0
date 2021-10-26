@extends('Templates.administrador')
@section('administrador_contenido')
<table class="table table-primary">
        <thead>
            <tr>
                <th>Codigo </th>
                <th>Nombre</th>
               <th>Fecha de entrega</th>
               <th>Ver detalles</th>
               <th>Actualizar</th>

               <th>Cambiar estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)

            <tr>
                <td>{{ $proyecto->CodigoProyecto}} </td>
                <td>{{ $proyecto->NombreProyecto}} </td>
                <td> {{ $proyecto->FechaEntrega}} </td>
                <td><a href="{{ url('proyecto/'.$proyecto->IdProyecto)}}">Ver detalles</a></td>
                <td>  <a href="{{url('proyecto/'.$proyecto->IdProyecto.'/edit' )}}">Actualizar</a></td>

                <td> </td>



            </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <a href="{{url('proyecto/create')}}" class="btn btn-primary">Nuevo Proyecto</a>
@endsection
