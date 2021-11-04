@extends('Templates.administrador')
@section('administrador_contenido')

<h1>
    Actividad: {{  $actividad->NombreActividad  }}

</h1>

<h3>

   <li>{{$actividad->Descripcion}}</li>
   <li>{{$actividad->FechalimitedeEntrega}}</li>
   <li>{{$actividad->Estado}}</li>

</h3>

@endsection
