

@extends('Templates.administrador')
@section('administrador_contenido')

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




