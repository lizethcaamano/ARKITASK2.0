@extends('Templates.administrador')
@section('administrador_contenido')
<<<<<<< HEAD
<form method="POST" action="{{ url('actividades/' . $actividad->IdActividad) }}" class="form-horizontal">
=======
<<<<<<< HEAD


<form method="POST"
action="{{ url('actividades/' . $actividad->IdActividad) }}"
 class="form-horizontal">
=======
<form method="POST" action="{{ url('actividades/' . $actividad->IdActividad) }}" class="form-horizontal">
>>>>>>> 87840d3af5e7ed022ebf21845bb5fea63d6ff7d2
>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
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
        <a class="btn btn-warning" href="{{url('actividades')}}">Volver</a>
      </div>
    </div>

    </fieldset>

    </form>
@endsection
