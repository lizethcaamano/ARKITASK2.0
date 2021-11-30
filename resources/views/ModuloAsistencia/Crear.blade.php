@extends('Templates.administrador')
@section('administrador_contenido')

<div class="container">

<form method="POST" action="{{url('asistencia')}}">
@csrf


<div class=" offset-2 card  w-50 ">

    <!-- Form Name -->
    <h2 class="card-header text-center text-dark">Registre su Asistencia</h2>

    <div class="card-body">
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" >Nombre</label>
      <select name="empleado" class="form-control form-control-lg default-select">
        <option value="">Seleccione</option>
          @foreach ($empleados as $empleado)
          <option value="{{$empleado->IdUsuario}}">{{$empleado->Nombre}} {{$empleado->Apellido}}</option>
          @endforeach
      </select>
      <br>
      <span class="text-danger">{{$errors->first("empleado")}}</span>
      <div class="col-md-4">
      </div>
    </div>


    <section class="form-row">
        <legend class="text-primary col-md-12">Horario de Ingreso</legend>
    <!-- Text input-->
    <div class="form-group col-md-6">
      <label class="col-md-6 control-label" for="textInput1">Fecha</label>
      <input value="{{old('fechaingreso')}}" name="fechaingreso" type="date" placeholder="" class="form-control" min="<?php echo date('Y-m-d');?>">
    </div>
    <br>
    <span class="text-danger">{{$errors->first("fechaingreso")}}</span>

    <div class="form-group col-md-6">
        <label class="col-md-6 control-label" for="textInput1">Hora</label>
        <input  value="{{old('horaingreso')}}"name="horaingreso" type="time" placeholder="" class="form-control" >
    </div>
    <br>
    <span class="text-danger">{{$errors->first("horaingreso")}}</span>
    </section>

    <section class="form-row">
        <legend class="text-primary col-md-12">Horario de Salida</legend>
    <!-- Text input-->
    <div class="form-group col-md-6">
      <label class="control-label col-md-6" for="textInput1">Fecha</label>
      <input value="{{old('fechasalida')}}"  name="fechasalida" type="date" placeholder="" class="form-control">
    </div>
    <br>
    <span class="text-danger">{{$errors->first("fechasalida")}}</span>

    <div class="form-group col-md-6">
        <label class="col-md-6 control-label" for="textInput1">Hora</label>
        <input  value="{{old('horasalida')}}" name="horasalida" type="time" placeholder="" class="form-control" >
    </div>
    <br>
    <br>
    <span class="text-danger">{{$errors->first("horasalida")}}</span>
    </section>

    </div><!-- fin card body -->
    <!-- Button -->
    <div class="form-group">
        <div class="card-footer">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary col-md-12">Registrar</button>
        </div>
    </div>

</div> <!-- Fin card -->

</form>
</div>
@endsection
