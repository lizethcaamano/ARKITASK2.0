@extends('Templates.templatelog')
@section('log')

<body>

    <div class="container-portada">
		<div class="capa-gradient"></div>

<div>

					<div class="wrap-login100 p-t-190 p-b-30">

<div>
<form class="login100-form validate-form" action="{{url('asignarcontra/'.$usuario->IdUsuario)}}" method="POST">
@csrf
<img src="{{asset('images/LogotipoBlan.png')}}" alt="" class="flex-wrap-iconoUsuario">

<H3 class="flex-wrap-login100-form-title p-t-20 p-b-45">Asignación de Contraseña</H3>
<br>

<div>
    <div class="flex-wrap-input100 validate-input m-b-10">
        <input class="input100" type="password" name="password" placeholder="Contraseña" value="{{old('password')}}">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock"></i>
        </span>
    </div>


    <div>
        <div class="flex-wrap-input101 validate-input m-b-10">
            <input class="input100" type="password" name="password" placeholder="Confirmar Contraseña" value="{{old('password')}}">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock"></i>
            </span>

        <div>
        </div>
<br>
        <div>
<button type="submit" class="login100-form-btn">Asignar</button>
</div>
</form>
</div>
                    </div>
</div>
    </div>
</body>
@endsection
