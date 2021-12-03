@extends('Templates.administrador')
@section('administrador_contenido')

<<<<<<< HEAD

<link rel="stylesheet" href="{{ asset ('css/Integrantes.css')}}">
=======
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('Grupo')}}">Todos los Grupos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear Grupo</li>
    </ol>
  </nav>

>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
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
<<<<<<< HEAD
=======

>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
        @foreach($usuarios as $usuario )
          <option value="{{$usuario->IdUsuario}}">{{$usuario->Nombre}}</option>
          @endforeach
<<<<<<< HEAD
     
=======

>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f
      </select>
</div>




<<<<<<< HEAD

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
=======
>>>>>>> 7ae984279a660110dc01e8714b8dee6f3defe91f

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
