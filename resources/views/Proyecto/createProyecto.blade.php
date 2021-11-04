@extends('Templates.administrador')
@section('administrador_contenido')



  <center>
<form method="POST"  action="{{url('proyecto') }}" class="form-horizontal">
 @csrf

 <div class="  card  w-50 ">

 <h2 class="card-header text-center text-dark">Crear Proyecto</h2>
 
<!-- Form Name -->


<div class="card-body">
<section class="form-row">
<!-- Text input-->
<div class="form-group col-md-6">
  <label class="col-md-6 control-label">Código de proyecto</label>
  <div class="col-md-6">
  <input value="{{old('codigo')}}" name="codigo"  type="text" placeholder="" class="form-control" maxlength="20">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group col-md-6">
  <label class="col-md-6 control-label" for="textinput">Nombre Proyecto</label>
  <div class="col-md-6">
  <input value="{{old('nombre')}}" name="nombre"  type="text" placeholder="" class="form-control " maxlength="30">
   <strong>{{$errors->first('nombre')}}</strong>
  </div>
</div>
</section>

<section class="form-row">
<div class="form-group col-md-6">
    <label class="col-md-6 control-label" for="textinput">Tipo de Proyecto</label>
    <div class="col-md-6">
    <select value="{{old('IdTipoProyectoFK')}}" name="tipopro" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($tipopro as $tipo)
          <option value="{{$tipo->IdTipoProyectoFK}}">{{$tipo->NombreTipoProyecto}}</option>
          @endforeach
      </select>
     <strong>{{$errors->first('')}}</strong>
    </div>
  </div>


<!-- Text input-->
<div class="form-group col-md-6">
  <label class="col-md-6 control-label" for="Gmail">Fecha Realizacion</label>
  <div class="col-md-6">
  <input value="{{old('fechar')}}" name="fechar"  type="date" placeholder="" class="form-control" min="<?php echo date("Y-m-d");?>">
   <strong>{{$errors->first('fechar')}}</strong>
  </div>
</div>
</section>

<section class="form-row">
<div class="form-group col-md-6">
  <label class="col-md-6 control-label" for="Gmail">Fecha Entrega</label>  
  <div class="col-md-6">
  <input value="{{old('fechae')}}" name="fechae"  type="date" placeholder="" class="form-control ">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div>

<div class="form-group col-md-6">
    <label class="col-md-6 control-label" >Grupo Trabajo</label>
    <div class="col-md-6">
    <select value="{{old('IdGrupoFK')}}" name="grupo" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($grupo as $grupos)
          <option value="{{$grupos->IdGrupoFK}}">{{$grupos->CodigoGrupo}}</option>
          @endforeach
      </select>
     <strong>{{$errors->first('')}}</strong>
    </div>
  </div>
</section>


<div class="form-group 12">
    <label class="col-md-12 control-label" >Catálogo</label>
    <div class="col-md-12">
    <select value="{{old('IdGrupoFK')}}" name="grupo" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($catalogo as $catalogos)
          <option value="{{$catalogos->IdFKGrupo}}">{{$catalogos->EmpresaContratante}}</option>
          @endforeach
      </select>
     <strong>{{$errors->first('')}}</strong>
    </div>
  </div>

</div><!-- fin card body -->

<!-- Button -->
<div class="form-group">
  <div class="col-md-12">
    <button id="" name="" class="btn btn-primary">Guardar</button>
  </div>
</div>

</div> <!--Fin card-->

</form>
</center>

@endsection
