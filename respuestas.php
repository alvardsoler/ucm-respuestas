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
				<div class="well question" >
					<?php 
						include_once("model/QuestionDAO.php");
						include_once("model/UserDAO.php");
						include_once("model/AnswerDAO.php");
						include_once ("model/DAOContests.php");	
						$idQuestion = strval($_GET['id']);

						$question = Question::getInstance() -> getQuestion($idQuestion);
						while ($q = mysql_fetch_assoc($question)){
							break;											
						}
						echo '<div class="panel panel-default">';
						echo '<div class="panel-heading"><h2>' . $q['title'] . '</h2></div>';
						echo '<div class="panel-body"><p>' . $q['text'] . '</p></div></div>';

						$answers = Answer::getInstance() -> getAnswersFromQuestion($idQuestion);
						
						echo '<div class="panel panel-info">';

						while ($a = mysql_fetch_assoc($answers)){
							echo '<div class="panel-heading"><a href="user.php?username=' . $a['username'] . '">' . $a['username'] . '</a></div><div class="panel-body"><p>' . $a['text'] . '</p></div>';
						}

						echo '</div>';
					?>

					<div class="input-group">
						<textarea class="form-control custom-control" rows="3" style="resize:none"></textarea> <span class="input-group-addon btn btn-primary">
						Responder</span>
					</div>



				</div>
				
			</div>
			<script type="text/javascript">
			/* validate form */
			
			</script>
		</body>
	</html>