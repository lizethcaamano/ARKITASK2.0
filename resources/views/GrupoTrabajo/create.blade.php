@extends('Templates.administrador')
@section('administrador_contenido')


<link rel="stylesheet" href="{{ asset ('css/Integrantes.css')}}">
<div class="container">
<h1>Crear Grupos de Proyecto</h1>
<form method="POST"  action="{{url('Grupo') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->
<legend>Crear grupos de trabajo</legend>

<!-- Text input-->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de inicio</label>
  <div class="col-md-4">
  <input value="{{old('inicio')}}" name="inicio"  type="date" placeholder="" class="form-control input-md" min="<?php echo date('Y-m-d');?>">
  <strong>{{$errors->first('inicio')}}</strong>  
  </div>
</div>



<!-- Text input-->



<div class="form-group">
  <label class="col-md-4 control-label" >Fecha desactivacion</label>
  <div class="col-md-4">
  <input value="{{old('desactivacion')}}" name="desactivacion"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('desactivacion')}}</strong> 
  </div>
</div>

<div class="mb-4 mt-6">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Cantidad de Integrantes del grupo</h4></label>
    <select value="" name="selectGrupoTrabajo" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
          <option value="div1">1</option>
          <option value="div2">2</option>
          <option value="div3">3</option>
          <option value="div4">4</option>
          <option value="div5">5</option>
          

         
         
      </select>
</div>
      
<div id="pai">

<div class="mb-4 mt-6" id="div1">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="{{old('IdUsuarioFK')}}" name="Int1" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
     
      </select>
</div>





<div class="mb-4 mt-6" id="div2">

  
    <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="{{old('IdUsuarioFK')}}" name="Int21" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
     
      </select>

<br>

      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="{{old('IdUsuarioFK')}}" name="Int22" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
     
      </select>

</div>


<div class="mb-4 mt-6" id="div3">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="{{old('IdUsuarioFK')}}" name="Int31" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
     
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
      <select value="{{old('IdUsuarioFK')}}" name="Int32" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
     
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
      <select value="{{old('IdUsuarioFK')}}" name="Int33" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
     
      </select>
</div>

<div class="mb-4 mt-6" id="div4">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int41" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int42" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int43" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int44" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
</div>

<div class="mb-4 mt-6" id="div5">
    <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int51" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int52" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int53" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int54" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
      <br>
      <label class="form-label" id="labelGrupoTrabajo"><h4>Integrante del grupo</h4></label>
    <select value="" name="Int55" id="selectGrupoTrabajo" class="form-control">
        <option value="">Seleccione</option>
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
      </select>
</div>

     

</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>
</div>

<script src="{{ asset ('jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset ('js/Integrantes.js')}}"></script>
@endsection
