@extends('Templates.templatelog')
@section('log')
<body>


@if (session("mirar_correo"))
    <h3 style="color: green">{{ session("mirar_correo") }}</h3>
@endif

<div class="container-portada">
    <div class="capa-gradient"></div>

<div>

                <div class="wrap-login100 p-t-190 p-b-30">
<form action="{{ url('link-seguridad') }}" method="POST" class="login100-form validate-form">


@csrf
<div class="flex-wrap-input100 validate-input m-b-10">
    <input value="{{old ('email') }}" class="input100" type="text" name="email" placeholder="Ingrese su Correo">
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-user"></i>
    </span>
    <strong class="alert-danger">{{$errors->first('email')}}</strong>
</div>

<button class="login100-form-btn" type="submit">
    Confirmar
</button>

</form>

</div>
</div>
</div>
</div>
</body>
@endsection
