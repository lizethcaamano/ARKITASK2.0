@extends('Templates.administrador')
@section('administrador_contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>

<h1> {{$usuario->Nombre}} {{$usuario->Apellido}} </h1>

   
    
<h3><strong>  Correo: {{$usuario->Correo}}</strong></h3>
<h3><strong> Numero de documento: {{$usuario->NumeroDocumento}}</strong></h3>
<h3><strong>  Fecha de nacimiento: {{$usuario->FechaNacimiento}}</strong></h3>
<h3><strong>  Telefono: {{$usuario->Telefono}}</strong></h3>
<h3><strong>  {{$usuario->Imagen}}</strong></h3>

</html>
@endsection