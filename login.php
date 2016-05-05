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
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">UCM Respuestas</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<!-- sin registro -->
						<li><a href="#contact">Últimas preguntas</a></li>
						<!-- registrado -->
						<!-- <li><a href="#about">Usuario</a></li>
						<li><a href="#about">Preguntar</a></li> -->
					</ul>
					<form class="navbar-form pull-right">
						<input type="text" class="form-control" placeholder="Login">
						<input type="password" class="form-control" placeholder="Password">
						<input type="submit" value="Login" class="btn"/>
						<a href="registro.php">Registrarse</a>
						<!-- registrado -->
						<!--<input type="submit" value="Logout" class="btn"/>-->
					</form>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<div class="container">
				<div class="container-fluid">
					<section class="container">
						<div class="container-page">
							<div class="col-md-6">
							<?php 
								function login(){
									// aqui hacer el logueo
									
									// check user exist and pass is ok

									// insert in session user

									echo "hola";
								} 

								if (isset($_POST['submit'])){
									login();
								}else{
									echo '<form id="regForm" method="post" action="login.php">
									<h3 class="dark-grey">Login</h3>
									<div class="form-group col-lg-12">
										<label>Username</label>
										<input type="" name="username" minLength="4" class="form-control" id="username" value="" required>
									</div>
									
									<div class="form-group col-lg-12">
										<label>Password</label>
										<input type="password" name="pass" minLength="5" class="form-control" id="pass" value="" required>
										<button type="submit" class="form-control btn btn-success" name="submit">Entrar</button>
									</div>
								</div>';
								}
							

							?>

								
							</div>
						</section>
					</div>
				</div>				
			</body>
		</html>