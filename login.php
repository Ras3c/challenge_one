<?php 
//si ya iniciaste session, te manda a home
	session_start();
	if(isset($_SESSION["id_usuario"])){
		echo "<script>window.location='home.php';</script>";
	}
 ?>
 <!DOCTYPE html>
	<html lang='es'>
		<head>
			<meta charset='utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<link rel='icon' type='image/png' href='images/box_32.png' sizes='32x32'>
			<link rel='manifest' href='manifest.json'>
			<meta name='theme-color' content='#cc0000'>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<title>Flexi Clientes</title>
			<script type='text/javascript' src='dist/js/jquery-1.10.2.min.js'></script>
			<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Roboto:300,400,500,700'>
			<script type='text/javascript' src='dist/js/bootstrap.min.js'></script>
			<link rel='stylesheet' type='text/css' href='dist/css/bootstrap.min.css'>
			<script type='text/javascript' src='dist/js/toastr.js'></script>
			<link rel='stylesheet' type='text/css' href='dist/css/toastr.css'>
		</head>
		<style type='text/css'>
			.one{
				height: 100vh;
				background: linear-gradient(#00263E, #33b1ff);
				background: -webkit-linear-gradient(#00263E, #33b1ff);
				color: #FFF;
			}
		</style>
		<body class='one'>
			<div class='container text-center'>
				<h2>Iniciar sesión</h2>
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8">
						<h4></h4>
						<input type='text' class='form-control' id='user' maxlength='45' required='' placeholder='Usuario' title='Usuario' autofocus="" autocomplete="off">
					</div>
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8">
						<h4></h4>
						<input type='password' class='form-control' id='pass' maxlength='45' required='' placeholder='Contraseña' title='Contraseña'>
					</div>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					<br>
					<button class='btn btn-warning' onclick="llamar_acceder()"><strong>Ingresar</strong></button>
				</div>
		  </div>
		</body>
	</html>


	 <script type="text/javascript">
	 	document.ready
	 	function llamar_acceder() {
	 		var user = document.getElementById('user').value;
	 		var pass = document.getElementById('pass').value;

	 		var mensaje = "";
	 		var valida= true;

	 		if (user.trim() == "") {
	 			valida = false;
	 			mensaje = "Es necesario el nombre de usuario";
	 		}

	 		if (pass.trim() == "") {
	 			valida = false;
	 			mensaje = "Es necesario anotar una contraseña";
	 		}

	 		if (valida) {
		 		$.ajax({
	 				url: 'accede.php',
	 				type: 'post',
	 				data: {usuario: user, contrase: pass},
	 				success: function (data) {
	 					console.log(data);
	 					if (data == 'OK') {
	 						window.location = 'home.php';
	 					}else if (data == 'WRONG_PASS') {
	 						toastr.warning("Contraseña o usuario incorrecto", "Advertencia");
							$('#pass').val("");
							$('#user').val("");
	 					}else{
	 						toastr.warning("Ocurrio un error favor de contactar con sistemas (XAMPP)", "Advertencia");
							$('#pass').val("");
							$('#user').val("");
	 					}
	 				}, error: function () {
						toastr.error("Ocurrio un error, favor de contactar con sistemas (accede)", "Error");
						$('#pass').val("");
						$('#user').val("");
	 				}
	 			});
	 		}else{
				toastr.warning(mensaje, "Advertencia");
				$('#pass').val("");
				$('#user').val("");
	 		}
	 	}

	 	$("#pass").keypress(function(e) {
			if(e.which == 13) {
				var user = document.getElementById('user').value;
		 		var pass = document.getElementById('pass').value;

		 		var mensaje = "";
		 		var valida= true;

		 		if (user.trim() == "") {
		 			valida = false;
		 			mensaje = "Es necesario el nombre de usuario";
		 		}

		 		if (pass.trim() == "") {
		 			valida = false;
		 			mensaje = "Es necesario anotar una contraseña";
		 		}

		 		if (valida) {
			 		$.ajax({
		 				url: 'accede.php',
		 				type: 'post',
		 				data: {usuario: user, contrase: pass},
		 				success: function (data) {
		 					console.log(data);
		 					if (data == 'OK') {
		 						window.location = 'home.php';
		 					}else if (data == 'WRONG_PASS') {
		 						toastr.warning("Contraseña o usuario incorrecto", "Advertencia");
								$('#pass').val("");
								$('#user').val("");
		 					}else{
		 						toastr.warning("Ocurrio un error favor de contactar con sistemas (XAMPP)", "Advertencia");
								$('#pass').val("");
								$('#user').val("");
		 					}
		 				}, error: function () {
							toastr.error("Ocurrio un error, favor de contactar con sistemas (accede)", "Error");
							$('#pass').val("");
							$('#user').val("");
		 				}
		 			});
		 		}else{
					toastr.warning(mensaje, "Advertencia");
					$('#pass').val("");
					$('#user').val("");
		 		}
			}
		});
	 </script>