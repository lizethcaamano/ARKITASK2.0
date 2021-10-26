@extends('Templates.administrador')
@section('administrador_contenido')



<form method="POST"  action="{{url('proyecto/' . $proyecto->IdProyecto) }}" class="form-horizontal">
@method('PUT')
@csrf
 <fieldset>
<!-- Form Name -->
<legend>Editar Proyecto</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Codigo de proyecto</label>
  <div class="col-md-4">
  <input value="{{$proyecto->CodigoProyecto}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">NombreProyecto</label>
  <div class="col-md-4">
  <input value="{{$proyecto->NombreProyecto}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('nombre')}}</strong>
  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Tipo de Proyecto</label>
    <div class="col-md-4">
    <select value="" name="tipopro" class="form-control input-md">
        <option value="">{{$proyecto->NombreTipoProyecto}}</option>
          @foreach ($tipopro as $tipo)
          <option value="{{$tipo->IdTipoProyecto}}">{{$tipo->NombreTipoProyecto}}</option>
          @endforeach
      </select>
     <strong>{{$errors->first('')}}</strong>
    </div>
  </div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Realización</label>
  <div class="col-md-4">
  <input value="{{$proyecto->FechaRealizacion}}" name="fechar"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechar')}}</strong>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Entrega</label>
  <div class="col-md-4">
  <input value="{{$proyecto->FechaEntrega}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>


@endsection
