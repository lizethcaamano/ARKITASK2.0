@extends('Templates.templatelog')
@section("log")
@section('titulo')
<h1 class="text text-secondary">Hola de nuevo!!</h1>
<h2 class="text text-warning">Aquí podras reestablecer tu contraseña</h2>
@endsection
<form method="POST" action="{{url('reset-password')}}">

    @csrf
    <label class="col-md-4 control-label" for="">Email</label>
    <input class="form-control input-md" type="email" name="email">
    <strong class="alert-danger">{{$errors->first('email')}}</strong>
    <br>
    <label class="col-md-4 control-label" for="">Nueva Contraseña</label>
    <input class="form-control input-md" type="password" name="password">
    <strong class="alert-danger">{{$errors->first('password')}}</strong>
    <br>
    <label class="col-md-4 control-label" for="">Confirme la Contraseña Nueva</label>
    <input class="form-control input-md" type="password" name="password_confirmation">
    <strong class="alert-danger">{{$errors->first('password')}}</strong>

    <input class="form-control input-md" type="hidden" name="token" value="{{$token}}">
    <br>
    <button  class="btn btn-success" type="submit">Reestablecer</button>
</form>

@endsection
