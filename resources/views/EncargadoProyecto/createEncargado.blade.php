@extends('Templates.administrador')
@section('administrador_contenido')

<link rel="stylesheet" href="{{ asset ('css/encargado.css')}}">
<link rel="stylesheet" href="{{asset('css/encargado.css')}}">
<div class="container-fluid" >
<center><h1>Nuevo Encargado</h1></center><br>
<form method="post" action="{{url('Encargado')}}">
    @csrf
    <div class="mb-4 mt-6">
    <label for="fechaInicio" class="form-label"><h4>Fecha de Inicio:</h4></label>
    <input value="{{old('fechaInicio')}}" type="date" name="fechaInicio" class="form-control" min="<?php echo date('Y-m-d');?>">
    <span class="text-danger">{{$errors->first("fechaInicio")}}</span>
</div><br>

<div class="mb-4 mt-6">
    <label for="fechaFinal" class="form-label"><h4>Fecha de finalización:</h4></label>
    <input value="{{old('fechaFinal')}}" type="date" name="fechaFinal" class="form-control">
    <span class="text-danger">{{$errors->first("fechaFinal")}}</span>
</div><br>

<div class="mb-4 mt-6">
    <label for="observaciones" class="form-label"><h4>Observaciones:</h4></label>
   <textarea value="{{old('observaciones')}}" name="observaciones" id="" cols="20" rows="9" class="form-control"></textarea>
    <span class="text-danger">{{$errors->first("observaciones")}}</span>
</div><br>

<div class="mb-4 mt-6">
    <label class="form-label" id="tipoProyecto" for="textinput"><h4>Proyecto</h4></label>
  
    <select value="" id="inputTipoProyecto" name="idproyectofk" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($proyecto as $proyecto)
          <option value="{{$proyecto->IdProyecto}}">Nombre: {{$proyecto->NombreProyecto}}  // Codigo: {{$proyecto->CodigoProyecto}}     </option>
          @endforeach
      </select>
     <!-- <strong class="text-danger" id="valTipoProyecto">{{$errors->first('tipopro')}}</strong> -->
   
  </div>
  

  <div class="mb-4 mt-6">
    <label class="form-label" id="tipoProyecto" for="textinput"><h4>Asignar Encargado</h4></label>
  
    <select value="" id="inputTipoProyecto" name="idusuariofk" class="form-control">
        <option value="">Seleccione</option>
          @foreach ($usuario as $usuario)
      
          <option value="{{$usuario->IdUsuario}}">  {{$usuario->Nombre}}  </option>
      
          @endforeach
      </select>
     <!-- <strong class="text-danger" id="valTipoProyecto">{{$errors->first('tipopro')}}</strong> -->
   
  </div>
  


<div class="d-grid gap-2 col-6 mx-aito">
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>
</div>
</form>
@endsection
