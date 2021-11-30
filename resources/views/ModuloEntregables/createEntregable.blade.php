@extends('Templates.administrador')
@section('administrador_contenido')
<form method="POST" action="{{ url('entregables') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <fieldset>


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
@endsection
