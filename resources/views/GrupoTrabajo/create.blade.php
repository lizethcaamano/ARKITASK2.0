@extends('Templates.administrador')
@section('administrador_contenido')
<div class="container">
<h1>Crear Grupos de Proyecto</h1>
<form method="POST"  action="{{url('Grupo') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->
<legend>Crear grupos de trabajo</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Codigo de grupo</label>
  <div class="col-md-4">
  <input value="{{old('codigo')}}" name="codigo"  type="text" placeholder="" class="form-control input-md" maxlength="16">
    <strong class="text-danger">{{$errors->first('codigo')}}</strong>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de inicio</label>
  <div class="col-md-4">
  <input value="{{old('inicio')}}" name="inicio"  type="date" placeholder="" class="form-control input-md" min="<?php echo date('Y-m-d');?>">
  <strong>{{$errors->first('inicio')}}</strong>  
  </div>
</div>



<!-- Text input-->



<div class="form-group">
  <label class="col-md-4 control-label" >Fecha desactivacion</label>
  <div class="col-md-4">
  <input value="{{old('desactivacion')}}" name="desactivacion"  type="date" placeholder="" class="form-control input-md">
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
