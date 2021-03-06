@extends('Templates.gerente')
@section('administrador_contenido')
<form method="POST" action="{{ url('gerente/Actividades' . $actividad->IdActividad) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Editar Actividad</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textname">Nombre Actividad</label>
      <div class="col-md-4">
        <input class="form-control" type="text" name="nombreA" value="{{$actividad->NombreActividad}}">
      <strong class="text-danger"> {{ $errors->first('nombreA')   }}  </strong>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textname">Descripción Actividad</label>
      <div class="col-md-4">
        <input class="form-control" type="text" name="descripcion" value="{{$actividad->Descripcion}}">         
      <strong class="text-danger"> {{ $errors->first('descripcion')   }}  </strong>
      </div>
    </div>
    <label class="col-md-4 control-label" for="textname">Fecha de creación</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="fechaInit" value="{{$actividad->FechadePublicacion}}" disabled>
      <strong class="text-danger"> {{ $errors->first('comentario')   }}  </strong>
      </div>
      <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Fecha Limite de entrega</label>
        <div class="col-md-4">
            <input class="form-control" type="text" name="fechaLim" value="{{$actividad->FechalimitedeEntrega}}">
        <strong class="text-danger"> {{ $errors->first('fechaLim')   }}  </strong>
        </div>
      </div>
      <div class="col-md-6">
        <label class="control-label">Proyecto</label>
         <select id="proyectos" name="proyecto" class="form-control">
            
            @foreach ( $Proyectos as $proyecto )  
            <option value="{{$proyecto['IdProyecto']}}">{{$proyecto['NombreProyecto']}}</option>
            @endforeach
          </select> 
          <span class="text-danger">{{$errors->first("proyecto")}}</span>
    </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Estado Actividad</label>
        <div class="col-md-4">
            <input class="form-control" type="text" name="estado" value="{{$actividad->Estado}}">
        <strong class="text-danger"> {{ $errors->first('estado')   }}  </strong>
        </div>
      </div>
     
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button"><br></label>
      <div class="col-md-4">
        <button id="button" name="button" class="btn btn-warning">Guardar</button>
        <a class="btn btn-warning" href="{{url('gerenteActividades')}}">Volver</a>
      </div>
    </div>

    </fieldset>

    </form>
@endsection
