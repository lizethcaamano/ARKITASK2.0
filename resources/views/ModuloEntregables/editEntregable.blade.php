@extends('Templates.administrador')
@section('administrador_contenido')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('entregables')}}">Lista de Entregables</a></li>
      <li class="breadcrumb-item"><a href="{{url('entregables/'. $entregable->IdArchivo)}}">Detalle Entregable</a></li>
      <li class="breadcrumb-item active" aria-current="page">Modificar Entregable</li>
    </ol>
  </nav>


<form method="POST" action="{{ url('entregables/' . $entregable->IdArchivo) }}" class="form-horizontal" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textname">Fecha de entrega: </label>
      <div class="col-md-4">
      <input value="{{ $entregable->FechaEntrega }}" name="fechaEntrega" type="date" placeholder="" class="form-control input-md">
      <strong class="text-danger"> {{ $errors->first('fechaEntrega')   }}  </strong>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textname">Archivo Entregado: </label>
      <div class="col-md-4">
      <input value="{{ $entregable->urlarchivo }}" name="urlarchivo" type="file" placeholder="" class="form-control input-md">
      <strong class="text-danger"> {{ $errors->first('fechaEntrega')   }}  </strong>
      </div>
    </div>
    <label class="col-md-4 control-label" for="textname">Comentarios</label>
    <div class="col-md-4">
      <textarea   id="comentario" name="comentario" type="text" placeholder="" class="form-control input-md" ></textarea>
      <strong class="text-danger"> {{ $errors->first('comentario')   }}  </strong>
      </div>
      <!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Estado:</label>
        <div class="col-md-4">
        <input value="{{ $entregable->Estado }}" name="estado" type="hidden" placeholder="" class="form-control input-md" >
        <strong class="text-danger"> {{ $errors->first('estado')   }}  </strong>
        </div>
      </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button"><br></label>
      <div class="col-md-4">
        <button id="button" name="button" class="btn btn-warning">Guardar</button>
        <a class="btn btn-warning" href="{{url('entregables')}}">Volver</a>
      </div>
    </div>

    </fieldset>
    </form>
    </div>
@endsection
