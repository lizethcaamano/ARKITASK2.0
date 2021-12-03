@extends('Templates.Gerente')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('Usuario')}}">Listado Usuarios</a></li>
      <li class="breadcrumb-item active" aria-current="page">Perfil Usuario</li>
    </ol>
  </nav>

<h1> {{$usuario->Nombre}} {{$usuario->Apellido}} </h1>



<h3><strong>  Correo: {{$usuario->Correo}}</strong></h3>
<h3><strong> Numero de documento: {{$usuario->NumeroDocumento}}</strong></h3>
<h3><strong>  Fecha de nacimiento: {{$usuario->FechaNacimiento}}</strong></h3>
<h3><strong>  Telefono: {{$usuario->Telefono}}</strong></h3>
<h3><strong>  {{$usuario->Imagen}}</strong></h3>

</html>
@endsection
