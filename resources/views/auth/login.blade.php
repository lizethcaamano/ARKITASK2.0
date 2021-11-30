<!DOCTYPE html>
<html lang="en">

<head>
	<title>Iniciar Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainn.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div class="container-portada">
		<div class="capa-gradient"></div>

					<div class="wrap-login100 p-t-190 p-b-30">

						<form method="POST" class="login100-form validate-form" action="{{ route('login') }}" >
@csrf
						<img src="images/LogotipoBlan.png" alt="" class="flex-wrap-iconoUsuario">

							<span class="flex-wrap-login100-form-title p-t-20 p-b-45">
								Iniciar Sesión
							</span>


							<div class="flex-wrap-input100 validate-input m-b-10" data-validate="Username is required">
								<input class="input100" type="text" name="email" placeholder="Usuario">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user"></i>
								</span>

							</div>
							<strong> {{ $errors->first('email') }} </strong>

							<div class="flex-wrap-input101 validate-input m-b-10" data-validate="Password is required">
								<input class="input100" type="password" name="password" placeholder="Contraseña">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-lock"></i>
								</span>

							</div>
							<strong> {{ $errors->first('password') }} </strong>
							<div class="flex-wrap-container-login100-form-btn">

								<button class="login100-form-btn" data-toggle="modal" data-target="#modelId">
									Iniciar
								</button>
							</div>


							<div class="flex-wrap-text-center w-full p-t-25 p-b-230">
								<a href="#" class="txt1">
									¿ Has olvidado tu contraseña ?
								</a>
							</div>

						</div>


						</form>

					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->


</body>

</html>
