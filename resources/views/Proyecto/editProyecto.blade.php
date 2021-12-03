@extends('Templates.administrador')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('proyecto')}}">Generalidades Proyectos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Editar Proyecto</li>
    </ol>
  </nav>

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


<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha de Entrega</label>
  <div class="col-md-4">
  <input value="{{$proyecto->FechaEntrega}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div> -->


<div class="mb-4 mt-6">
    <label class="form-label" id="tipoProyecto" for="textinput"><h4>Tipo de Proyecto</h4></label>

    <select  id="inputTipoProyecto" name="tipopro" class="form-control">
        <option value="">Seleccione</option>
        @foreach ($tipopro as $tipo)
          <option value="{{$tipo->NombreTipoProyecto}}">{{$tipo->NombreTipoProyecto}}</option>
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
