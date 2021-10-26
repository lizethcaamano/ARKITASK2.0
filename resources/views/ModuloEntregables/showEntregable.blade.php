@extends('Templates.administrador')
@section('administrador_contenido')
<h1>
    Entregable: {{  $entregable->URLarchivo  }}

</h1>

<h3>

   <li>{{$entregable->FechaEntrega}}</li>
   <li>{{$entregable->Estado}}</li>


</h3>
@endsection
