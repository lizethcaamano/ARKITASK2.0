@extends('Templates.administrador')
@section('administrador_contenido')
<link rel="stylesheet" href="{{ asset ('css/encargado.css')}}">

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('Encargado')}}">Listado Encargados</a></li>
      <li class="breadcrumb-item"><a href="{{url('Encargado/'.$encargado->IdEncargado)}}">Detalles Encargados</a></li>
      <li class="breadcrumb-item active" aria-current="page">Editar Encargado</li>
    </ol>
  </nav>
<div class="container-fluid">
   <center><h1>Modificar encargado</h1></center>
<form method="POST" action="{{ url('Encargado/'. $encargado->IdEncargado) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>
<div class="mb-4 mt-6">
    <label for="fechaInicio" class="form-label">Fecha de inicio:</label>
    <input type="date" name="fechaInicio" class="form-control" value="{{$encargado->FechaInicio}}" >
    <span class="text-danger">{{$errors->first("fechaInicio")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="fechaFinal" class="form-label">Fecha final:</label>
    <input type="date" name="fechaFinal" class="form-control" value="{{$encargado->FechaFinal}}">
    <span class="text-danger">{{$errors->first("fechaFinal")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="observaciones" class="form-label">Observaciones:</label>
    <input type="text" name="observaciones" class="form-control" value="{{$encargado->Observaciones}}">
    <span class="text-danger">{{$errors->first("observaciones")}}</span>
</div>
<!-- Button -->
<div class="form-group">
      <label class="col-md-4 control-label" for="button"><br></label>
      <div class="d-grid gap-2 col-6 mx-aito">
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>
    </fieldset>
    </div>
    </form>

@endsection
