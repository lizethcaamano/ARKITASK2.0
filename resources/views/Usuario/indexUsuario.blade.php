

@extends('Templates.administrador')
@section('administrador_contenido')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Listado de usuarios</h4>
            </div>

            <div class="card-body">
                <div><a  href="{{url('Usuario/create')}}"><i class="fa fa-user h1"><i class=" fa fa-plus-circle text-success h3" ></i></i></a></div><br>
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <tr class="table table-primary">

                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Documento</th>
                            <th>Teléfono</th>
                            <th>Estado</th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario )

                                        <tr>

                                            <td>{{ $usuario->Nombre}}</td>
                                            <td>{{ $usuario->Apellido}}</td>
                                            <td>{{ $usuario->email}}</td>
                                            <td>{{ $usuario->NumeroDocumento}}</td>
                                            <td>{{ $usuario->Telefono}}</td>
                                            <td></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ url('Usuario/'.$usuario->IdUsuario.'/edit')}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ url('Usuario/'.$usuario->IdUsuario)}}" class="btn btn-info shadow btn-xs sharp"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$usuarios->links()  }}
            </div>
        </div>
    </div>




@endsection
