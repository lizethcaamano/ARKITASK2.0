@extends('Templates.administrador')
@section('administrador_contenido')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('Usuario')}}">Listado Usuarios</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear Nuevo Usuario</li>
    </ol>
  </nav>


<body>
<center><h1 class="text-danger">Nuevo Usuario</h1></center>

<div>
<form method="post" action="{{url('Usuario')}}">
    @csrf

    <div class="form-group">
        <label class="col-md-6 control-label" >Asignar Rol</label>
        <select name="rol" class="form-control form-control-lg default-select">
          <option value="">Seleccione</option>
            @foreach ($rol as $roles)
            <option value="{{$roles->IdRol}}">{{$roles->NombreRol}}</option>
            @endforeach
        </select>
        <br>
        <span class="text-danger">{{$errors->first("rol")}}</span>
        <div class="col-md-4">
        </div>
      </div>

<div class="mb-4 mt-6">
    <label for="nombre" class="form-label">Nombre de usuario:</label>
    <input type="text" value="{{old('nombre')}}" name="nombre" class="form-control " maxlength="25">
    <span class="text-danger">{{$errors->first("nombre")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="apellido" class="form-label">Apellido de usuario:</label>
    <input type="text" value="{{old('apellido')}}" name="apellido" class="form-control" maxlength="25">
    <span class="text-danger">{{$errors->first("apellido")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="email" class="form-label">Email</label>
    <input type="text" value="{{old('correo')}}"  name="correo" class="form-control" maxlength="40">
    <span class="text-danger">{{$errors->first("correo")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="documento" class="form-label">Número de documento:</label>
    <input type="text" value="{{old('numerodocumento')}}" name="numerodocumento" class="form-control" maxlength="10">
     <span class="text-danger">{{$errors->first("numerodocumento")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="fecha" class="form-label">Fecha de nacimiento:</label>
    <input type="date" value="{{old('fechanacimiento')}}" name="fechanacimiento" class="form-control" >
    <span class="text-danger">{{$errors->first("fechanacimiento")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="telefono" class="form-label">Teléfono:</label>
    <input type="text" value="{{old('telefono')}}" name="telefono" class="form-control" maxlength="10">
     <span class="text-danger">{{$errors->first("telefono")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="imagen" class="form-label">Imagen:</label>
    <input type="file" value="{{old('imagen')}}" name="imagen" class="form-control">
 <span class="text-danger">{{$errors->first("imagen")}}</span>
</div>



<input type="password" value="{{old('password')}}" name="password" class="form-control" >




<div class="d-grid gap-2 col-6 mx-aito">
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>

</form>
</div class="container">

@endsection
