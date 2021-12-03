@extends('Templates.administrador')
@section('administrador_contenido')
<div class="container">
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('Grupo')}}">Todos los Grupos</a></li>
      <li class="breadcrumb-item"><a href="{{url('Grupo/'.$grupo->IdGrupo)}}">Detalles Grupo {{$grupo->CodigoGrupo}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">Modificar Grupo {{$grupo->CodigoGrupo}}</li>
    </ol>
  </nav>


<h1>Modificar grupos de proyecto</h1>

<form method="POST" action="{{url('Grupo/' . $grupo->IdGrupo) }}" class="form-horizontal">
@method('PUT')
@csrf
 <fieldset>
<!-- Form Name -->
<legend>Crear grupos de trabajo</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Codigo de grupo</label>
  <div class="col-md-4">
  <input value="{{$grupo->CodigoGrupo}}" name="codigoe"  type="text" placeholder="" class="form-control input-md">
 <strong class="text-danger">{{$errors->first('codigoe')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de inicio</label>
  <div class="col-md-4">
  <input value="{{$grupo->FechaInicio}}" name="inicio"  type="date" placeholder="" class="form-control input-md">
 <strong>{{$errors->first('inicio')}}</strong>
  </div>
</div>



<!-- Text input-->



<div class="form-group">
  <label class="col-md-4 control-label" >Fecha desactivacion</label>
  <div class="col-md-4">
  <input value="{{$grupo->FechaDesactivacion}}" name="desactivacion"  type="date" placeholder="" class="form-control input-md">
  <strong>{{$errors->first('desactivacion')}}</strong>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>
</div>

@endsection
