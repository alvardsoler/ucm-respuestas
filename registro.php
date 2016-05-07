<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>UCM Respuestas - Registro</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.12.3.min.js"> </script>
		<script type="text/javascript" src="js/jquery.validate.min.js"> </script>
	</head>
	<body>
		
		<?php
				include("navbar.php");
		?>
		<div class="container">
			<div class="container-fluid">
				<section class="container">
					<div class="container-page">
						<div class="col-md-6">
							<form id="regForm" method="post" action="regUser.php">
								<h3 class="dark-grey">Registro</h3>
								<div class="form-group col-lg-12">
									<label>Username</label>
									<input type="" name="username" minLength="4" class="form-control" id="username" value="" required>
								</div>
								
								<div class="form-group col-lg-6">
									<label>Password</label>
									<input type="password" name="pass" minLength="5" class="form-control" id="pass" value="" required>
								</div>
								
								<div class="form-group col-lg-6">
									<label>Repetir Password</label>
									<input type="password" name="pass2" minLength="5" class="form-control" id="pass2" value="" required>
								</div>
								
								<div class="form-group col-lg-6">
									<label>Dirección de email</label>
									<input type="email" name="email" class="form-control" id="email" value="" required>
								</div>
								
								<div class="form-group col-lg-6">
									<label>Repetir dirección de email</label>
									<input type="email" name="email2" class="form-control" id="email2" value="" required>
								</div>
								
								<div class="col-sm-6">
									<input type="checkbox" class="checkbox" name="showemail" />Mostrar mi email al resto de usuarios
								</div>
							</div>
							<div class="col-md-6">
								<h3 class="dark-grey">Terminos y condiciones</h3>
								<p>
									Haciendo click en Registro aceptas las condiciones y normas de la web.
								</p>
								<p>
									No está permitido el contenido ofensivo hacia otros usuarios o actitudes racistas, sexistas o discriminatorias.
								</p>
								<p>
									Se podrá anular la cuenta de un usuario si infringe estas normas.
								</p>
								<button type="submit" class="btn btn-primary">Registrar</button>
							</div>
						</form>
					</div>
				</section>
			</div>
		</div>
		<script type="text/javascript">
		/* validate form */
			$().ready(function() {
					$("#regForm").validate({
						rules: {
							username: {
								required: true
							},
							pass: {
								required: true
							},
							pass2: {
								required: true,
								equalTo: "#pass"
							},
							email: {
								required: true,
								email: true
							},
							email2: {
								required: true,
								email: true,
								equalTo: "#email"
							}
						},
						messages:{
							username:{
								required: "Por favor, introduzca un nombre de usuario",
								minlength: "El usuario debe tener al menos 4 caracteres"
							},
						pass: {
								required: "Por favor introduzca una clave",
								minlength: "Al menos debe tener 5 caracteres"
							},
							pass2: {
								required: "Por favor introduzca una clave de mínimo 5 caracteres",
								minlength: "Al menos debe tener 5 caracteres",
								equalTo: "Por favor, las dos claves deben ser iguales"
							},
							email: {
								required: "Por favor debe introducir una dirección de correo",
								email: "El formato debe ser user@example.com"
							},
							email2: {
								required: "Por favor, los dos emails deben ser iguales",
								email: "El formato debe ser user@example.com",
								equalTo: "Por favor, las dos direcciones de email deben ser iguales"
								}
						}
					});
			});
		
		</script>
	</body>
</html>