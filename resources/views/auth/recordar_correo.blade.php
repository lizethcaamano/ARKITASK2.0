@extends('Templates.templatelog')
@section('log')
<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
      </svg>


<div class="container-portada">
    <div class="capa-gradient"></div>


    <div>
    @if (session("mirar_correo"))
    <div class="alert alert-success d-flex" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>

            <h3 style="color: green">{{ session("mirar_correo") }}</h3>

        </div>
      </div>
      @endif
    </div>


<div>

                <div class="wrap-login100 p-t-190 p-b-30">
<form action="{{ url('link-seguridad') }}" method="POST" class="login100-form validate-form">
@csrf


<img src="images/LogotipoBlan.png" alt="" class="flex-wrap-iconoUsuario">

<span class="flex-wrap-login100-form-title p-t-20 p-b-45">
   Recuperar contraseña
</span>


<div>
<div class="flex-wrap-input100 validate-input m-b-10">
    <input value="{{old ('email') }}" class="input100" type="text" name="email" placeholder="Ingrese su Correo">
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-user"></i>
    </span>
    <strong class="alert-danger">{{$errors->first('email')}}</strong>
</div>
</div>




<button id="btnRecordarCorreo" class="login100-form-btn" type="submit">
    Confirmar
</button>

</form>

</div>
</div>
</div>
</div>
</body>
@endsection
