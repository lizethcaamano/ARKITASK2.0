

@extends('Templates.administrador')

@section('administrador_contenido')

@section('titulo')
    Asistencia
@endsection
<!-- Breadcrum!-->
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Asistencia Empleados</li>
    </ol>
  </nav>
@if(session("mensaje_exito"))
    <div class="alert alert-primary text-left alert-di fade show">
         <strong>{{session("mensaje_exito")}}</strong>
         <button data-dismiss="alert" class="close"><span>&times;</span></button>
    </div>
    @endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Asistencia de empleados</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <div><a class="btn btn-success" href="{{url('reporte')}}">Reporte</a></div> <br>

                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center" colspan="2">Horario de Ingreso</th>
                                <th class="text-center" colspan="2">Horario de Salida</th>
                            </tr>
                            <tr>
                                <th>Empleado</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asistencias as $asistencia)



                            <tr>
                                <td>{{$asistencia->usuarios->Nombre}} {{$asistencia->usuarios->Apellido}}</td>
                                <td>{{$asistencia->FechaIngreso}}</td>
                                <td>{{$asistencia ->HoraIngreso}}</td>
                                <td>{{$asistencia->FechaSalida}}</td>
                                <td>{{$asistencia ->HoraSalida}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div><a class="btn btn-success" href="{{url('asistencia/create')}}">Crear Asistencia</a></div> <br>

@endsection




