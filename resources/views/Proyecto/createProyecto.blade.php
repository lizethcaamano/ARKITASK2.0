@extends('Templates.gerente')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('gerente/Proyecto')}}">Generalidades Proyectos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear nuevo proyecto</li>
    </ol>
  </nav>


  <center>
<form method="POST"  action="{{url('gerente/Proyecto') }}" class="form-horizontal">
 @csrf

 <div class="card w-50 ">

 <h1 class="card-header text-center text-primary">Crear Proyecto</h1>

<!-- Form Name -->



<section class="form-row">
<!-- Text input-->
<div class="form-group col-md-6">


  <input name="codigo"  type="hidden" >



<!-- Text input-->
<div class="mb-4 mt-6">
  <label class="form-label-1" for="textinput"><h4>Nombre Proyecto</h4></label>
  <div class="col-md-6">
  <input value="{{old('nombre')}}" name="nombre"  type="text" placeholder="" id="NombreProyecto" class="form-control" maxlength="30">

  </div>
</div>
<strong class="text-danger" id="valNombre" >{{$errors->first('nombre')}}</strong>
</section>

<section class="form-row">
<div class="mb-4 mt-6">
    <label class="form-label" id="tipoProyecto" for="textinput"><h4>Tipo de Proyecto</h4></label>

    <select value="{{old('IdTipoProyectoFK')}}" id="inputTipoProyecto" name="tipopro" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($tipopro as $tipo)
          <option value="{{$tipo->IdTipoProyecto}}">{{$tipo->NombreTipoProyecto}}</option>
          @endforeach
      </select>
     <!-- <strong class="text-danger" id="valTipoProyecto">{{$errors->first('tipopro')}}</strong> -->

  </div>


<!-- Text input-->
<div class="mb-4 mt-6">
  <label class="col-md-6 control-label" id="labelFechaRealizacion" ><h4>Fecha Realizacion</h4></label>
  <div class="col-md-6">
  <input value="{{old('fechar')}}" id="inputFechaRealizacion" name="fechar"  type="date" placeholder="" class="form-control" min="<?php echo date("Y-m-d");?>">
  <strong class="text-danger" id="valRealizacion">{{$errors->first('fechar')}}</strong>
  </div>
</div>
</section>

</section>


<section class="mb-4 mt-6">
<div class="form-group col-md-6">
  <label class="form-label" id="labelFechaEntrega"for="Gmail"><h4>Fecha Entrega</h4></label>
  <div class="col-md-6">
  <input value="{{old('fechae')}}" id="inputFechaEntrega"name="fechae"  type="date" placeholder="" class="form-control ">
   <strong class="text-danger" id="valFechaEntrega">{{$errors->first('fechae')}}</strong>
  </div>
</div>

<div class="mb-4 mt-6">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Grupo Trabajo</h4></label>
    <select value="{{old('IdGrupoFK')}}" name="grupo" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($grupo as $grupos)
          <option value="{{$grupos->IdGrupo}}">{{$grupos->CodigoGrupo}}</option>
          @endforeach
      </select>

  </div>
  <!-- <strong class="text-danger" id="valGrupo">{{$errors->first('grupo')}}</strong> -->
</section>


<div class="mb-4 mt-6">
    <label class="form-label" id="labelCatalogo" ><h4>Catálogo</h4></label>

    <select value="{{old('IdGrupoFK')}}" id="selectCatalogo" name="catalogo" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($catalogo as $catalogos)
          <option value="{{$catalogos->IdCatalogo}}">{{$catalogos->EmpresaContratante}}</option>
          @endforeach
      </select>
     <!-- <strong class="text-danger" id="valCatalogo">{{$errors->first('catalogo')}}</strong> -->

  </div>

  <div class="mb-4 mt-6">
    <label for="observaciones" class="form-label" id="labelDesc"><h4>Descripción:</h4></label>
   <textarea value="{{old('descripcion')}}" name="descripcion" id="txDesc" cols="20" rows="9" class="form-control"></textarea>
    <!-- <span class="text-danger">{{$errors->first("descripcion")}}</span> -->
</div><br>


</div><!-- fin card body -->

<!-- Button -->
<div class="form-group">
  <div class="col-md-12">
    <button id="guardar" name="" class="btn btn-primary">Guardar</button>
  </div>
</div>

</div> <!--Fin card-->

</form>
</center>

@endsection
