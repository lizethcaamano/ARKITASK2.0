@extends('Templates.administrador')
@section('administrador_contenido')

<div class="container">
<center><h1>Crear Catálogo</h1></center>
<form method="POST" action="{{url('catalogo')}}">
    @csrf

    <fieldset>

      

        <!-- Text input-->
        <div class="form-group" >
          <label class="col-md-4 control-label" >Nombre de Particpantes</label>
          <input  value="{{old('participantes')}}" name="participantes" type="text" placeholder="" class="form-control input-md" maxlength="80">
          <strong> {{ $errors->first('participantes') }} </strong>
          <div class="col-md-4">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textInput1">Empresa Contrante</label>
          <input value="{{old('empresa')}}" name="empresa" type="text" placeholder="" class="form-control input-md" maxlength="24">
          <strong> {{ $errors->first('empresa') }} </strong>
          <div class="col-md-4">
        </div>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Área del Proyecto</label>
         
          <div class="col-md-4">
          <input value="{{old('area')}}" name="area" type="text" placeholder="" class="form-control input-md" maxlength="12">
          <strong> {{ $errors->first('area') }} </strong>  
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
    </div>
@endsection
