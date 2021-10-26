@extends('Templates.administrador')
@section('administrador_contenido')
<h1 class="text-danger">Nuevo Encargado</h1>
<form method="post" action="{{url('Encargado')}}">
    @csrf
    <div class="mb-4 mt-6">
    <label for="fechaInicio" class="form-label">Fecha de Inicio:</label>
    <input type="date" name="fechaInicio" class="form-control">
    <span class="text-danger">{{$errors->first("fechaInicio")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="fechaFinal" class="form-label">Fecha final:</label>
    <input type="date" name="fechaFinal" class="form-control">
    <span class="text-danger">{{$errors->first("fechaFinal")}}</span>
</div>

<div class="mb-4 mt-6">
    <label for="observaciones" class="form-label">Observaciones:</label>
    <input type="text" name="observaciones" class="form-control">
    <span class="text-danger">{{$errors->first("observaciones")}}</span>
</div>
<div class="d-grid gap-2 col-6 mx-aito">
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>
</form>
@endsection
