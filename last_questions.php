<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>UCM Respuestas - Pregunta</title>
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
						<li class="active"><a href="last_questions.php">Últimas preguntas</a></li>
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
				<div class="well question" >
					<h1>Últimas preguntas</h1>
					<div class="panel panel-default">						
						<div class="panel-body">
							<ul>
								<?php
									include_once("model/QuestionDAO.php");
									include_once ("model/DAOContests.php");	

									$questions = Question::getInstance() -> getQuestions();	

									while ($q = mysql_fetch_assoc($questions)){
										echo "<li><a href='user.php?username=" . $q['username'] . "'>" . $q['username'] . "</a> - <a href='respuestas.php?id=" . $q['id'] . "'>" . $q['title'] . "</a></li>";
									}

								?>
								<!--<li><a href="user.html">pepito</a> - <a href="respuestas.html">¿Dónde pedir el carnet de universitario?</a></li>
								<li><a href="user.html">juanita</a> - <a href="">"No hay nadie que ame el dolor mismo, que lo busque, lo encuentre y lo quiera, simplemente porque es el dolor."</a></li>-->
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			<script type="text/javascript">
			/* validate form */
			
			</script>
		</body>
	</html>