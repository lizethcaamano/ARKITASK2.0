@extends('Templates.administrador')
@section('administrador_contenido')

<link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
       <li class="breadcrumb-item active" aria-current="page">Listado Entregables</li>
    </ol>
  </nav>

<center><h1 class="text-info font-blockquote">Listado de Entregables</h1></center>
@if (session("mensaje_exito"))
    <div>
        <strong>
            {{ session("mensaje_exito") }}
        </strong>
    </div>
@endif
<<<<<<< HEAD
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
                </div>
            </div>
        </div>
    </div>
>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f

<a  Class = "btn btn-info" href="{{ url('entregables/create') }}">Nuevo Archivo</a>


@endsection
