@extends('Templates.administrador')
@section('administrador_contenido')
<form method="POST" action="{{ url('entregables/' . $entregable->IdArchivo) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Motivo de rechazo Entregable:</legend>

    <!-- Text input-->
    <div class="form-group">



      <div class="col-md-4">
      <input   id="urlarchivo" name="urlarchivo" type="hidden" placeholder="" class="form-control input-md" value="{{$entregable->URLarchivo}}">
     
      <label class="col-md-6 control-label" for="textname">Comentarios</label>
        <div class="col-md-6">
            <textarea   id="comentario" name="comentario" type="text" placeholder="" class="form-control input-md" ></textarea>
            <strong class="text-danger"> {{ $errors->first('comentario')   }}  </strong>
            </div>
      <div class="col-md-4">
        <input   id="estado" name="estado" type="hidden" placeholder="" class="form-control input-md" value="{{$entregable->Estado}}" >
        <strong class="text-danger"> {{ $errors->first('estado')   }}  </strong>
        </div>
        <div class="col-md-4">
          <input   id="fechaEntrega" name="fechaEntrega" type="hidden" placeholder="" class="form-control input-md"value="{{$entregable->FechaEntrega}}" >
          <strong class="text-danger"> {{ $errors->first('fechaEntrega')   }}  </strong>
          </div>
    </div>


    <!-- Button -->
    <div class="form-group">

        <button id="button" name="button" class="btn btn-warning">Guardar</button>
        <a class="btn btn-warning" href="{{url('entregables')}}">Volver</a>
      </div>
    </div>

    </fieldset>
    </form>
 
@endsection