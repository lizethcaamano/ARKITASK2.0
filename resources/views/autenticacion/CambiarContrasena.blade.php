<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>

<form action="{{url('CambiarContrasena/'. usuario->idUsuario)}}" methos="POST"></form>
<H3>Cambio de Contraseña</H3>
<br>
<div class="div">
    <h5>Contraseña</h5>
    <input type="password" class="input"  id="usuario" name="password" value="{{old('password')}}">
</div>
<div class="div">
    <h5>Confirmar Contraseña</h5>
    <input type="password" class="input"  id="usuarioo" name="password" value="{{old('password')}}">
</div>
</body>
</html>