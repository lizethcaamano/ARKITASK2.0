@extends('Templates.administrador')
@section('administrador_contenido')


<div class="container">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalasistencia">
    Launch
  </button>
  <!-- Modal -->
  <div class="modal fade" id="modalasistencia" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title">Registra Tú Asistencia</h1>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{url('asistencia')}}">
                    @csrf


                    <!--<div class=" offset-2 card  w-50 ">-->

                        <!-- Form Name -->
                        <!--<h2 class="card-header text-center text-dark">Registre su Asistencia</h2>-->

                        <div class="card-body">
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-6 control-label" >Nombre</label>
                          <select name="empleado" class="form-control form-control-lg default-select">
                            <option value="">Seleccione</option>
                              @foreach ($empleados as $empleado)
                              <option value="{{$empleado->IdUsuario}}">{{$empleado->Nombre}} {{$empleado->Apellido}}</option>
                              @endforeach
                          </select>
                          <br>
                          <span class="text-danger col-md-12">{{$errors->first("empleado")}}</span>
                          <div class="col-md-4">
                          </div>
                        </div>


                        <section class="form-row">
                            <legend class="text-primary col-md-12">Horario de Ingreso</legend>
                        <!-- Text input-->
                        <div class="form-group col-md-6">
                          <label class="col-md-6 control-label" for="textInput1">Fecha</label>
                          <input value="{{old('fechaingreso')}}" name="fechaingreso" type="date" placeholder="" class="form-control" min="<?php echo date('Y-m-d');?>">
                        </div>


                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label" for="textInput1">Hora</label>
                            <input  value="{{old('horaingreso')}}"name="horaingreso" type="time" placeholder="" class="form-control" >
                        </div>
                        <br>

                        <span class="col-md-6 text-danger">{{$errors->first("fechaingreso")}}</span>
                        <br>
                        <span class="col-md-6 text-danger">{{$errors->first("horaingreso")}}</span>
                        </section>

                        <section class="form-row">
                            <legend class="text-primary col-md-12">Horario de Salida</legend>
                        <!-- Text input-->
                        <div class="form-group col-md-6">
                          <label class="control-label col-md-6" for="textInput1">Fecha</label>
                          <input value="{{old('fechasalida')}}"  name="fechasalida" type="date" placeholder="" class="form-control">
                        </div>



                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label" for="textInput1">Hora</label>
                            <input  value="{{old('horasalida')}}" name="horasalida" type="time" placeholder="" class="form-control" >
                        </div>
                        <br>
                        <span class="col-md-6 text-danger">{{$errors->first("fechasalida")}}</span>
                        <br>
                        <span class="col-md-6 text-danger">{{$errors->first("horasalida")}}</span>
                        </section>

                        <div class="form-group">
                            <div>
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary col-md-12">Registrar</button>
                            </div>
                        </div>
                        </div><!-- fin card body -->
                        <!-- Button -->




                    <!--</div>--> <!-- Fin card -->

                    </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>



</div>
@endsection
