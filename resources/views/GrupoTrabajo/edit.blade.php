@extends('Templates.administrador')
@section('administrador_contenido')

<div class="container">
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
