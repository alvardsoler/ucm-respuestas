<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>UCM Respuestas - Inicio</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>
		<script type="text/javascript" src="js/jquery-1.12.3.min.js"> </script>
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
						<li class="active"><a href="index.hpp">Inicio</a></li>
						<!-- sin registro -->
						<li><a href="last_questions.php">Últimas preguntas</a></li>
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
				<div class="starter-template">
					<h1>UCM Respuestas</h1>
					<p class="lead">Plantea tus dudas y recibe una respuesta de otros miembros de la UCM.<br> Comienza registrándote <a href="registro.php">aquí</a>.</p>
				</div>
				<h2>En general</h2>
				<p>Estaría bien dividir el codigo en templates, básicamente la barra de arriba</p>
				<h2>Views</h2>
				<ul>
					<li><a href="registro.php">Registro</a></li>
					<li><a href="user.php?username=pepito">Usuario</a></li>
					<li><a href="question.php">Pregunta (crear las preguntas)</a></li>
					<li><a href="respuestas.php?id=1">Pregunta (respuestas)</a></li>
					<li><a href="last_questions.php">Ultimas preguntas</a></li>
				</ul>
				<h2>JS</h2>
				<ul>
					<li>jQuery check campos de registro</li>
				</ul>
				<h2>PHP - Usuario</h2>
				<ul>
					<li>username</li>
					<li>password</li>
					<li>email</li>
					<li>avatar</li>
					<li>points</li>
				</ul>
			</div>
			
		</body>
	</html>