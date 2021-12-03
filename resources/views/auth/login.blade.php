
@extends('Templates.templatelog')
@section('log')
<body>


    @if(session("credenciales_invalidas"))
		<strong  class="text-warning">{{ session('credenciales_invalidas')}}</strong>
	@endif

    @if(session("mensajeExito"))
		<strong  class="text-warning">{{ session('mensajeExito')}}</strong>
	@endif
	<div class="container-portada">
		<div class="capa-gradient"></div>

<div>

					<div class="wrap-login100 p-t-190 p-b-30">

						<form method="POST" class="login100-form validate-form" action="{{ url('login') }}" >
@csrf
						<img src="images/LogotipoBlan.png" alt="" class="flex-wrap-iconoUsuario">

							<span class="flex-wrap-login100-form-title p-t-20 p-b-45">
								Iniciar Sesión
							</span>



							<div class="flex-wrap-input100 validate-input m-b-10">
								<input value="{{old ('email') }}" class="input100" type="text" name="email" placeholder="Correo">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user"></i>
								</span>
                                <strong class="alert-danger">{{$errors->first('email')}}</strong>
							</div>


                            <br>

                            <div>
							<div class="flex-wrap-input101 validate-input m-b-10">
								<input class="input100" type="password" name="password" placeholder="Contraseña">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-lock"></i>
								</span>
                                <strong class="alert-danger">{{$errors->first('password')}}</strong>
                            <div>
                            </div>

                            <div class="flex-wrap-text-center w-full p-t-25 p-b-230">
								<a href="{{url('recuperar-password')}}" class="txt1">
									¿ Has olvidado tu contraseña ?
								</a>
							</div>

								<button type="submit" class="login100-form-btn">
									Iniciar
								</button>





						</div>


						</form>

					        </div>
					    </div>
				    </div>
			    </div>

</body>

@endsection
