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



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">FechaRealizacion</label>
  <div class="col-md-4">
  <input value="{{$proyecto->FechaRealizacion}}" name="fechar"  type="date" placeholder="" class="form-control input-md">

  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">FechaRealizacion</label>
  <div class="col-md-4">
  <input value="{{$proyecto->FechaEntrega}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div>

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
