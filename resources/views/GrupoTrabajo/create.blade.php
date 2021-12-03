@extends('Templates.administrador')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('Grupo')}}">Todos los Grupos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear Grupo</li>
    </ol>
  </nav>

<div class="container">
<h1>Crear Grupos de Proyecto</h1>
<form method="POST"  action="{{url('Grupo') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->
<legend>Crear grupos de trabajo</legend>

<!-- Text input-->

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

<div class="mb-4 mt-6">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Integrantes del grupo</h4></label>
    <select value="{{old('IdGrupoFK')}}" name="GrupoTrabajo" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>

        @foreach($usuarios as $usuario )
          <option value="">{{$usuario->Nombre}}</option>
          @endforeach

      </select>






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
