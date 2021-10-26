<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
<h1 class="text-danger">Editar Usuario</h1>
<form method="POST" action="{{ url('Usuario/' . $usuario->IdUsuario) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>
<div class="mb-4 mt-6">
    <label for="nombre" class="form-label">Nombre de usuario:</label>
    <input type="text" name="nombre" class="form-control" value="{{$usuario->Nombre}}">
    <!-- <span class="text-danger">{{$errors->first("nombre")}}</span> -->
</div>

<div class="mb-4 mt-6">
    <label for="apellido" class="form-label">Apellido de usuario:</label>
    <input type="text" name="apellido" class="form-control" value="{{$usuario->Apellido}}">
    <!-- <span class="text-danger">{{$errors->first("apellido")}}</span> -->
</div>

<div class="mb-4 mt-6">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="correo" class="form-control" value="{{$usuario->Correo}}">
    <!-- <span class="text-danger">{{$errors->first("email")}}</span> -->
</div>

<div class="mb-4 mt-6">
    <label for="documento" class="form-label">Número de documento:</label>
    <input type="text" name="numerodocumento" class="form-control" value="{{$usuario->NumeroDocumento}}">
    <!-- <span class="text-danger">{{$errors->first("documento")}}</span> -->
</div>

<div class="mb-4 mt-6">
    <label for="fecha" class="form-label">Fecha de nacimiento:</label>
    <input type="date" name="fechanacimiento" class="form-control" value="{{$usuario->FechaNacimiento}}">
    <!-- <span class="text-danger">{{$errors->first("fecha")}}</span> -->
</div>

<div class="mb-4 mt-6">
    <label for="telefono" class="form-label">Teléfono:</label>
    <input type="text" name="telefono" class="form-control" value="{{$usuario->Telefono}}">
    <!-- <span class="text-danger">{{$errors->first("telefono")}}</span> -->
</div>

<div class="mb-4 mt-6">
    <label for="imagen" class="form-label">Imagen:</label>
    <input type="file" name="imagen" class="form-control" value="{{$usuario->Imagen}}">
    <!-- <span class="text-danger">{{$errors->first("imagen")}}</span> -->
</div>

<!-- Button -->
<div class="form-group">
      <label class="col-md-4 control-label" for="button"><br></label>
      <div class="d-grid gap-2 col-6 mx-aito">
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>
    </div>

    </fieldset>

    </form>

</body>
</html>