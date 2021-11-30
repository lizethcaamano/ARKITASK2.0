@extends('Templates.administrador1')
@section('administrador_contenido')
@csrf
<fieldset>
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Calendar</a></li>
				</ol>
                </div>

                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-intro-title">Calendar</h4>

                                <div class="">
                                    <div id="external-events" class="my-3">
                                        <p>Drag and drop your event or click in the calendar</p>
                                        <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>New Theme Release</div>
                                        <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>My Event
                                        </div>
                                        <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager</div>
                                        <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
                                    </div>
                                    <!-- checkbox -->
									<div class="checkbox custom-control checkbox-event custom-checkbox pt-3 pb-5">
										<input type="checkbox" class="custom-control-input" id="drop-remove">
										<label class="custom-control-label" for="drop-remove">Remove After Drop</label>
									</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                   <!-- BEGIN MODAL -->
                   <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Opciones Actividad</strong></h4>
                            </div>
                            {{-- @foreach ( $Actividades as $actividades )  @endforeach
                            @method('PUT')
                                @csrf
                                <div class="modal-footer">

                                <label class="control-label">Nombre Actividad</label>
                                <input class="form-control" type="text" name="nombreA" value="{{$actividades->NombreActividad}}">
                                <label class="control-label">Descripción Actividad</label>
                                <input class="form-control" type="text" name="descripcion" value="{{$actividades->Descripcion}}">
                                <label class="control-label">Fecha de Creación</label>
                                <input class="form-control" type="text" name="fechaInit" value="{{$actividades->FechadePublicacion}}" disabled>
                                <label class="control-label">Fecha Limite De Entrega</label>
                                <input class="form-control" type="text" name="fechaLim" value="{{$actividades->FechalimitedeEntrega}}">
                                <label class="control-label">Estado Actividad</label>
                                <input class="form-control" type="text" name="estado" value="{{$actividades->Estado}}">
                            </div> --}}
                            <div class="modal-footer">
                                @foreach ( $Actividades as $actividad )  @endforeach
                                <a class="btn btn-warning" href="{{url('actividades/' . $actividad->IdActividad)}}">Detalle</a>
                                {{-- <a class="btn btn-warning" href="{{url('actividad/editar')}}">Editar</a> --}}
                                {{-- <a class="btn btn-warning" href="{{url('actividad/editar' . $actividades->IdActividad)}}">Editar</a> --}}
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- Modal Add Category -->
              <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong></strong></h4>
                        </div>
                        <div class="modal-body">
                            @foreach ( $Actividades as $actividad )  @endforeach
                            <form method="POST" action="/actividad/crear" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Nombre Actividad</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="nombreA">
                                        <span class="text-danger">{{$errors->first("nombreA")}}</span>
                                    </div>

                                        <div class="col-md-6">
                                            <label class="control-label">Descripción Actividad</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="descripcion">
                                            <span class="text-danger">{{$errors->first("descripcion")}}</span>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label">Fecha Limite De Entrega</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="datetime-local" name="fechaLim">
                                            <span class="text-danger">{{$errors->first("fechaLim")}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Proyecto</label>
                                             <select id="proyectos" name="proyecto" class="form-control">
                                                <option selected disabled readonly>Eliga el nombre del proyecto</option>
                                                @foreach ( $Proyectos as $proyecto )
                                                <option value="{{$proyecto['IdProyecto']}}">{{$proyecto['NombreProyecto']}}</option>
                                                @endforeach
                                              </select>
                                              <span class="text-danger">{{$errors->first("proyecto")}}</span>
                                        </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="cambiar color" name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control form-white" placeholder="Enter name" type="hidden" name="fechaInit" value="{{$actividad->FechadePublicacion}}">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</fieldset>
@endsection
