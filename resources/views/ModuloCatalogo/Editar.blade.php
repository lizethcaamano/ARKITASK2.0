@extends('Templates.administrador')
@section('administrador_contenido')


<div class="container">
<center><h1>Editar Catálogo</h1></center>
<form method="POST" action="{{url('catalogo/'. $catalogo->IdCatalogo)}}">
    @method('PUT')
    @csrf

    <fieldset>

        <!-- Form Name -->
     

        <!-- Text input-->
        <div class="form-group" >
          <label class="col-md-4 control-label" >Nombre de Particpantes</label>
          <input value="{{$catalogo->NombreParticipantes}}"  name="participantes" type="text" placeholder="" class="form-control input-md" >
          <div class="col-md-4">
          </div>
          <strong> {{ $errors->first('participantes') }} </strong>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textInput1">Empresa Contrante</label>
          <input value="{{$catalogo->EmpresaContratante}}" name="empresa" type="text" placeholder="" class="form-control input-md" >
          <div class="col-md-4">
          <strong> {{ $errors->first('empresa') }} </strong>
        </div>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Área del Proyecto</label>
          <div class="col-md-4">
          <input value="{{$catalogo->Area}}" name="area" type="text" placeholder="" class="form-control input-md" >
          </div>
          <strong> {{ $errors->first('area') }} </strong>
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
    </div>
@endsection
