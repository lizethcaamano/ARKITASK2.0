@extends('Templates.administrador')
@section('administrador_contenido')

<form method="POST" action="{{url('catalogo')}}">
    @csrf

    <fieldset>

        <!-- Form Name -->
        <legend>Crear el Catálogo</legend>

        <!-- Text input-->
        <div class="form-group" >
          <label class="col-md-4 control-label" >Nombre de Particpantes</label>
          <input  name="participantes" type="text" placeholder="" class="form-control input-md" >
          <strong> {{ $errors->first('NombreParticipantes') }} </strong>
          <div class="col-md-4">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textInput1">Empresa Contrante</label>
          <input  name="empresa" type="text" placeholder="" class="form-control input-md" >
          <strong> {{ $errors->first('EmpresaContratante') }} </strong>
          <div class="col-md-4">
        </div>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Área del Proyecto</label>
         
          <div class="col-md-4">
          <input name="area" type="text" placeholder="" class="form-control input-md" >
          <strong> {{ $errors->first('Area') }} </strong>  
        </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Registrar</button>
            </div>
        </div>

        </fieldset>

    </form>
@endsection
