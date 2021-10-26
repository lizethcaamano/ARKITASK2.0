@extends('Templates.administrador')
@section('administrador_contenido')
<form method="POST" action="{{ url('entregables') }}" class="form-horizontal">
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Nuevo Entregable</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textname">Adjuntar actividad:</label>
      <div class="col-md-4">
      <input   value="{{ old('urlarchivo')}}" id="urlarchivo" name="urlarchivo" type="file" placeholder="" class="form-control input-md" >
      <strong class="text-danger"> {{ $errors->first('urlarchivo')   }}  </strong>
      </div>
    </div>


    <!-- Button -->
    <div class="form-group">

        <button id="button" name="button" class="btn btn-warning">Guardar</button>
      </div>
    </div>

    </fieldset>
    </form>
@endsection
