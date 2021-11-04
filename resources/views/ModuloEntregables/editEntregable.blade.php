@extends('Templates.administrador')
@section('administrador_contenido')
<div class="container">
<center><h1>Editar Entregable</h1></center>
<form method="POST"
action="{{ url('entregables/' . $entregable->IdArchivo) }}"
 class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textname">Archivo Entregado: </label>
      <div class="col-md-4">
      <input value="{{ $entregable->URLarchivo }}" name="urlarchivo" type="file" placeholder="" class="form-control input-md" >
      <strong class="text-danger"> {{ $errors->first('urlarchivo')   }}  </strong>
      </div>
    </div>

      <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Estado:</label>
        <div class="col-md-4">
        <input value="{{ $entregable->Estado }}" name="estado" type="text" placeholder="" class="form-control input-md" >
        <strong class="text-danger"> {{ $errors->first('estado')   }}  </strong>
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
    </div>
@endsection
