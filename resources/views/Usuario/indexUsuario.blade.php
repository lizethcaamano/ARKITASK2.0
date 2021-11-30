@extends('Templates.administrador')
@section('administrador_contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
   
<center><h1 class="text-lefth">Lista de Usuarios</h1></center>
<!-- @if (session("mensaje_exito"))
    <div>
        <strong>
            {{ session("mensaje_exito") }}
        </strong>
    </div>
@endif -->
<table class="table table-dark">
    <thead>
        <tr class="table table-primary">
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Documento</th>
            <th>Fecha de Nacimiento</th>
            <th>Teléfono</th>
            <th>Imagen</th>
            <th >Detalles</th>
            <th>Actualizar</th>
            <th>Modificar estado</th>
        </tr>
    </thead>
    <tbody >
        @foreach($usuarios as $usuario )

        <tr>
          
            <td>{{ $usuario->Nombre}}</td>
            <td>{{ $usuario->Apellido}}</td>
            <td>{{ $usuario->Correo}}</td>
            <td>{{ $usuario->NumeroDocumento}}</td>
            <td>{{ $usuario->FechaNacimiento}}</td>
            <td>{{ $usuario->Telefono}}</td>
            <td>{{ $usuario->Imagen}}</td>
            <td><a class="btn btn-outline-secondary" href="{{ url('Usuario/'.$usuario->IdUsuario)}}">Ver Detalles </a></td>
           <td> <a class="btn btn-outline-info" href="{{ url('Usuario/'.$usuario->IdUsuario.'/edit')}}"> Actualizar </a></td>

           

        </tr>

        @endforeach
    </tbody>
</table>

 {{ $usuarios->links() }}

<a  Class = "btn btn-info " href="{{ url('Usuario/create') }}">Nuevo Usuario</a>

</body>
</html>
@endsection