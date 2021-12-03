@extends('Templates.administrador')
@section('administrador_contenido')
<<<<<<< HEAD
=======

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('entregables')}}">Lista de Entregables</a></li>
      <li class="breadcrumb-item"><a href="{{url('entregables/'. $entregable->IdArchivo)}}">Detalle Entregable</a></li>
      <li class="breadcrumb-item active" aria-current="page">Calificar Entregable</li>
    </ol>
  </nav>

>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
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
<<<<<<< HEAD
     
=======

>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
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
<<<<<<< HEAD
 
@endsection
=======

@endsection
>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
