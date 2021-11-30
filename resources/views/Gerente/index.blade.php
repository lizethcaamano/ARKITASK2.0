@extends('Templates.gerente')
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
        </tr>
    </thead>
    <tbody >
        @foreach ( $Entregables as $entregables )

        <tr>

            <td>{{ $entregables->FechaEntrega}}</td>
            <td>
                    <i class="fas fa-file-pdf"> Sin vista Previa</i>

        </td>
            <td>{{ $entregables->comentariosEntrega}}</td>
            <td>
                @switch($entregables->Estado)
                   @case(null)
                   <a href="{{ url('gerente/Entregables/' . $entregables->IdArchivo . '/habilitar') }}">
                       Asignar estado
                   </a>
                   @break
                   @case(1)
                   <strong class="text-danger">Entregable Rechazado</strong>
                   <a href="{{ url('gerente/Entregables/' . $entregables->IdArchivo . '/habilitar') }}">
                       Aceptar
                   </a>
                   @break
                   @case(2)
                   <strong class="text-success">Entregable Aceptado</strong>
                   <a href="{{ url('gerente/Entregables/' . $entregables->IdArchivo . '/habilitar') }}">
                       Rechazar
                   </a>
                   <a href="{{ url('gerente/Entregables/' . $entregables->IdArchivo . '/rechazado') }}">

                   </a>
                   @break
               @endswitch

           </td>
            <td><a class="btn btn-outline-secondary" href="{{ url('gerente/Entregables/'.$entregables->IdArchivo)}}">Detalles </a></td>


        @endforeach
    </tbody>
</table>

@endsection
