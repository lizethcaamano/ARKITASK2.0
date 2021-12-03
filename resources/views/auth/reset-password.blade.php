@extends('Templates.templatelog')
@section("log")

<div class="container-portada">
    <div class="capa-gradient"></div>

<div>

    <div class="wrap-login100 p-t-190 p-b-30">

<form method="POST" action="{{url('reset-password')}}" class="login100-form validate-form">

    @csrf

    <img src="images/LogotipoBlan.png" alt="" class="flex-wrap-iconoUsuario">

    <span class="flex-wrap-login100-form-title p-t-20 p-b-45">
        Recuperar contraseña
     </span>

    <div class="flex-wrap-input100 validate-input m-b-10">
        <input value="{{old ('email') }}" class="input100" type="text" name="email" placeholder="Correo">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user"></i>
        </span>
        <strong class="alert-danger">{{$errors->first('email')}}</strong>
    </div>

    <div>
        <div class="flex-wrap-input100 validate-input m-b-10">
            <input class="input100" type="password" name="password" placeholder="Contraseña" value="{{old('password')}}">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock"></i>
            </span>
        </div>


        <div id="confirmarResetPassword">
            <div class="flex-wrap-input101 validate-input m-b-10">
                <input class="input100" type="password" name="password" placeholder="Confirmar Contraseña" value="{{old('password')}}">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock"></i>
                </span>

            <div>
            </div>

    <input class="form-control input-md" type="hidden" name="token" value="{{$token}}">
    <br>
    <button  class="login100-form-btn" type="submit">Reestablecer</button>
</form>
</div>
</div>
</div>
</div>
@endsection
