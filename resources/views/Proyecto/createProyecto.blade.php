@extends('Templates.administrador')
@section('administrador_contenido')





<form method="POST"  action="{{url('proyecto') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->
<legend>Registrar Proyecto</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Código de proyecto</label>
  <div class="col-md-4">
  <input value="{{old('codigoproyecto')}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Proyecto</label>
  <div class="col-md-4">
  <input value="{{old('NombreProyecto')}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('nombre')}}</strong>
  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Tipo de Proyecto</label>
    <div class="col-md-4">
    <select value="{{old('IdTipoProyectoFK')}}" name="tipopro" class="form-control input-md">
        <option value="">Seleccione</option>
          @foreach ($tipopro as $tipo)
          <option value="{{$tipo->IdTipoProyectoFK}}">{{$tipo->NombreTipoProyecto}}</option>
          @endforeach
      </select>
     <strong>{{$errors->first('')}}</strong>
    </div>
  </div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Realizacion</label>
  <div class="col-md-4">
  <input value="{{old('FechaRealizacion')}}" name="fechar"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechar')}}</strong>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Entrega</label>
  <div class="col-md-4">
  <input value="{{old('FechaEntrega')}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div>


<div class="form-group">
    <label class="col-md-4 control-label" >Grupo Trabajo</label>
    <div class="col-md-4">
    <select value="{{old('IdGrupoFK')}}" name="grupo" class="form-control input-md">
        <option value="">Seleccione</option>
          @foreach ($grupo as $grupos)
          <option value="{{$grupos->IdGrupoFK}}">{{$grupos->CodigoGrupo}}</option>
          @endforeach
      </select>
     <strong>{{$errors->first('')}}</strong>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" >Catálogo</label>
    <div class="col-md-4">
    <select value="{{old('IdGrupoFK')}}" name="grupo" class="form-control input-md">
        <option value="">Seleccione</option>
          @foreach ($catalogo as $catalogos)
          <option value="{{$catalogos->IdFKGrupo}}">{{$catalogos->EmpresaContratante}}</option>
          @endforeach
      </select>
     <strong>{{$errors->first('')}}</strong>
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


@endsection
