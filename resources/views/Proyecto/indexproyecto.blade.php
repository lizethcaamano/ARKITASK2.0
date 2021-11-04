@extends('Templates.administrador')
@section('administrador_contenido')

<link rel="stylesheet" href="{{ asset ('css/proyecto.css')}}">
<link rel="stylesheet" href="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css"> 
<link rel="stylesheet" href="estilos.css">
<div style="height: 50px;"></div>
   

        
    <!-- Modal 2 - animado-->
<div id="modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <!--      Para centrado-->
  <div class="modal-dialog modal-dialog-centered" role="document">  

<!--  <div class="modal-dialog" role="document">-->
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <form method="POST"  action="{{url('proyecto') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Codigo de proyecto</label>
  <div class="col-md-4">
  <input value="{{old('codigoproyecto')}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Proyecto</label>
  <div class="col-md-4">
  <input value="{{old('NombreProyecto')}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('nombre')}}</strong>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Realizacion</label>
  <div class="col-md-4">
  <input value="{{old('FechaRealizacion')}}" name="fechar"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechar')}}</strong>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Entrega</label>  
  <div class="col-md-4">
  <input value="{{old('FechaEntrega')}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div>


<!-- Button -->



      </div>
      <div class="modal-footer">
      <button id="" name="" class="btn btn-secondary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  
      </fieldset>
</form>
 
    </div>
  </div>
</div>      
           

<a href="{{url('proyecto/create')}}" class="btn btn-primary">Nuevo Proyecto</a>

<div class="container">
@foreach ($proyectos as $proyecto)


   
        <div class="card__perfil ">
            <div class="card__nombre">
               <CENTER> <h3>{{ $proyecto->NombreProyecto}}</h3></CENTER>
                <p> Codigo: {{ $proyecto->CodigoProyecto}}</p>
            </div>
            <hr>
            <div class="card__descripcion">
                <p>Fecha de entrega: {{ $proyecto->FechaEntrega}}</p>
                <p>Fecha de Realizacion: {{ $proyecto->FechaRealizacion}}</p>
                <p>Tipo de Proyecto: </p>
                <p>Estado: {{ $proyecto->Estado}}</p>
                
            </div>
            <hr>
            <div class="card__button">
            <a href="{{ url('proyecto/'.$proyecto->IdProyecto)}}">Ver detalles</a>
           
            </div>
           
        </div>
 @endforeach
       

        </div>
      
    <br>

    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
   
    <script src="js/codigo.js"></script> 	  
   
@endsection

