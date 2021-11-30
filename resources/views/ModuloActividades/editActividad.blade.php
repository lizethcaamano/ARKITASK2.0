@extends('Templates.administrador')
@section('administrador_contenido')


<form method="POST"
action="{{ url('actividades/' . $actividad->IdActividad) }}"
 class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Editar Actividad</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textname">Nombre de la Actividad</label>
      <div class="col-md-4">
      <input value="{{ $actividad->NombreActividad }}" name="NombreActividad" type="text" placeholder="" class="form-control input-md" >
      <strong class="text-danger"> {{ $errors->first('NombreActividad')   }}  </strong>
      </div>
    </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Descripcion:</label>
        <div class="col-md-4">
        <input value="{{ $actividad->Descripcion }}" name="descripcion" type="textarea" placeholder="" class="form-control input-md" >
        <strong class="text-danger"> {{ $errors->first('Descripcion')   }}  </strong>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Fecha limite de Entrega:</label>
        <div class="col-md-4">
        <input value="{{ $actividad->FechalimitedeEntrega }}" name="FechalimitedeEntrega" type="date" placeholder="" class="form-control input-md" >
        <strong class="text-danger"> {{ $errors->first('FechalimitedeEntrega')   }}  </strong>
        </div>
      </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Estado:</label>
        <div class="col-md-4">
        <input value="{{ $actividad->Estado }}" name="Estado" type="text" placeholder="" class="form-control input-md" >
        <strong class="text-danger"> {{ $errors->first('Estado')   }}  </strong>
        </div>
      </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button"><br></label>
      <div class="col-md-4">
        <button id="button" name="button" class="btn btn-warning">Guardar</button>
      </div>
    </div>

    </fieldset>

    </form>
@endsection
