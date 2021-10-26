@extends('Templates.administrador')
@section('administrador_contenido')
<form method="POST" action="{{url('asistencia/'. $asistencia->IdAsistencia)}}">
    @method('PUT')
    @csrf

    <fieldset>

        <!-- Form Name -->
        <legend>Ingrese su Asistencia</legend>

        <!-- Text input-->
        <div class="form-group" >
          <label class="col-md-4 control-label" >Nombre</label>
          <select name="empleado" class="form-control input-md">

          </select>
          <input value="{{$asistencia->IdUsarioFK}}" name="empleado" type="text" placeholder="" class="form-control input-md">
          <div class="col-md-4">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textInput1">Horario de Ingreso</label>
          <input value="{{$asistencia->FechaHoraIngreso}}" name="ingreso" type="datetime-local" class="form-control input-md">
          <div class="col-md-4">
        </div>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Horario de Salida</label>
          <div class="col-md-4">
          <input value="{{$asistencia->FechaHoraSalida}}" name="salida" type="datetime-local" class="form-control input-md">
          </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Registrar</button>
            </div>
        </div>

        </fieldset>

    </form>
@endsection
