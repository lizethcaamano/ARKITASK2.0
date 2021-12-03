@extends('Templates.administrador')
@section('administrador_contenido')

<div class="container">
<h1>Crear Actividad</h1>
<form method="POST" action="{{ url('actividades') }}" class="form-horizontal">
    @csrf
    <fieldset>

    <!-- Form Name -->
    

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textname">Nombre de la actividad-</label>
      <div class="col-md-4">
      <input   value="{{ old('NombreActividad')}}" id="NombreActividad" name="NombreActividad" type="text" placeholder="" class="form-control input-md" >
      <strong class="text-danger"> {{ $errors->first('NombreActividad')   }}  </strong>
      </div>
    </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="descripcion">Descripcion:</label>
        <div class="col-md-4">
        <input  value="{{ old('descripcion')}}" id="descripcion" name="descripcion" type="textarea" placeholder="" class="form-control input-md" >
        <strong> {{ $errors->first('descripcion') }} </strong>
        <strong class="text-danger"> {{ $errors->first(' Descripcion')   }}  </strong>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="FechadePublicacion">Fecha de Publicacion:</label>
        <div class="col-md-4">
        <input  value="{{ old('FechadePublicacion')}}" id="FechadePublicacion" name="FechadePublicacion" type="date" placeholder="" class="form-control input-md" >

        <strong class="text-danger"> {{ $errors->first('FechadePublicacion')   }}  </strong>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="FechaLimitedeEntrega">Fecha limite de entega:</label>
        <div class="col-md-4">
        <input  value="{{ old('FechaLimitedeEntrega')}}" id="FechaLimitedeEntrega" name="FechaLimitedeEntrega" type="date" placeholder="" class="form-control input-md" >

        <strong class="text-danger"> {{ $errors->first('FechaLimitedeEntrega')   }}  </strong>
        </div>
      </div>


    <!-- Button -->
    <div class="form-group">

        <button id="button" name="button" class="btn btn-warning">Guardar</button>
      </div>
    </div>

    </fieldset>
    </form>
    </div>
@endsection
