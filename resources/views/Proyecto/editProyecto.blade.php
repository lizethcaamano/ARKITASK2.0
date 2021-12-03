@extends('Templates.administrador')
@section('administrador_contenido')

<div class="container">
<center><h1>Editar Proyecto</h1></center>
<form method="POST"  action="{{url('proyecto/' . $proyecto->IdProyecto) }}" class="form-horizontal">
@method('PUT')
@csrf



<!-- Form Name -->


<!-- Text input-->

<input name="codigo" value="{{$proyecto->CodigoProyecto}}"  type="hidden" >

<div class="form-group col-md-6">
<!-- Text input-->
<div class="mb-4 mt-6">
  <label class="col-md-4 control-label" for="textinput">NombreProyecto</label>
  <div class="col-md-6">
  <input value="{{$proyecto->NombreProyecto}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
  </div>
</div> 
  <strong>{{$errors->first('nombre')}}</strong>
  </div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">FechaRealizacion</label>
  <div class="col-md-4">
  <input value="{{$proyecto->FechaRealizacion}}" name="fechar"  type="date" placeholder="" class="form-control input-md">
   
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha de Entrega</label>
  <div class="col-md-4">
  <input value="{{$proyecto->FechaEntrega}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div>


<div class="mb-4 mt-6">
    <label class="form-label" id="tipoProyecto" for="textinput"><h4>Tipo de Proyecto</h4></label>
  
    <select value="{{$proyecto->IdTipoProyectoFK}}" id="inputTipoProyecto" name="tipopro" class="form-control">
  
          @foreach ($tipopro as $tipo)
          <option value="{{$proyecto->IdTipoProyectoFK}}">{{$tipo->NombreTipoProyecto}}</option>
          @endforeach
      </select>
     <!-- <strong class="text-danger" id="valTipoProyecto">{{$errors->first('tipopro')}}</strong> -->
   
  </div>

  <div class="mb-4 mt-6">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Grupo Trabajo</h4></label>
    <select  name="grupo" id="selectGrupoTrabajo" class="form-control">
    @foreach ($grupo as $grupos)
    <option value="{{$grupos->IdGrupo}}">{{$grupos->CodigoGrupo}}</option>
          @endforeach
      </select>

  </div>
  <!-- <strong class="text-danger" id="valGrupo">{{$errors->first('grupo')}}</strong> -->



<div class="mb-4 mt-6">
    <label class="form-label" id="labelCatalogo" ><h4>Catálogo</h4></label>
 
    <select value="{{old('IdGrupoFK')}}" id="selectCatalogo" name="catalogo" class="form-control">
  
          @foreach ($catalogo as $catalogos)
          <option value="{{$catalogos->IdCatalogo}}">{{$catalogos->EmpresaContratante}}</option>
          @endforeach
      </select>
     <!-- <strong class="text-danger" id="valCatalogo">{{$errors->first('catalogo')}}</strong> -->
    
  </div>
  
  <div class="mb-4 mt-6">
    <label for="observaciones" class="form-label" id="labelDesc"><h4>Descripción:</h4></label>
   <textarea value="{{$proyecto->Descripcion}}" name="descripcion" id="txDesc" cols="20" rows="9" class="form-control"></textarea>
    <!-- <span class="text-danger">{{$errors->first("descripcion")}}</span> -->
</div><br>

</section>




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
