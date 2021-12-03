@extends('Templates.administrador')
@section('administrador_contenido')
<<<<<<< HEAD
=======

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('entregables')}}">Lista de Entregables</a></li>
      <li class="breadcrumb-item active" aria-current="page">Subir Entregable</li>
    </ol>
  </nav>

>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
<form method="POST" action="{{ url('entregables') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Nuevo Entregable</legend>

    <!-- Text input-->
    <div class="form-group">


      <label class="col-md-4 control-label" for="textname">Adjuntar actividad:</label>

      <div class="col-md-4">
      <input   id="urlarchivo" name="urlarchivo" type="file" placeholder="" class="form-control input-md">
      <strong class="text-danger"> {{ $errors->first('urlarchivo')   }}  </strong>
      </div>
      <label class="col-md-4 control-label" for="textname">Usuarios</label>
      <div class="col-md-4">
        <select id="usuarios" name="usuarios" class="form-control">
          <option selected disabled readonly>Eliga el nombre del usuario</option>
          @foreach ( $Usuarios as $usuarios )
          <option value="{{$usuarios['IdUsuario']}}">{{$usuarios['Nombre']}}</option>
          @endforeach
        </select>
        <strong class="text-danger"> {{ $errors->first('usuarios')   }}  </strong>
        </div>
      <label class="col-md-4 control-label" for="textname">Actividad</label>
      <div class="col-md-4">
        <select id="actividades" name="actividades" class="form-control">
          <option selected disabled readonly>Eliga el nombre de la actividad</option>
          @foreach ( $Actividades as $actividades )
          <option value="{{$actividades['IdActividad']}}">{{$actividades['NombreActividad']}}</option>
          @endforeach
        </select>
        <strong class="text-danger"> {{ $errors->first('actividades')   }}  </strong>
        </div>
      <label class="col-md-4 control-label" for="textname">Comentarios</label>
      <div class="col-md-4">
        <textarea   id="comentario" name="comentario" type="text" placeholder="" class="form-control input-md" ></textarea>
        <strong class="text-danger"> {{ $errors->first('comentario')   }}  </strong>
        </div>
      <div class="col-md-4">
        <input   id="estado" name="estado" type="hidden" placeholder="" class="form-control input-md" >
        <strong class="text-danger"> {{ $errors->first('estado')   }}  </strong>
        </div>
        <div class="col-md-4">
          <input   id="fechaEntrega" name="fechaEntrega" type="hidden" placeholder="" class="form-control input-md" >
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

=======
>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
@endsection
