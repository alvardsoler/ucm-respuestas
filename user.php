<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>UCM Respuestas - Usuario</title>
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
				<div class="row profile">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="well well-sm">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
								</div>
								<div class="col-sm-6 col-md-8">

									<?php
										include_once("model/QuestionDAO.php");
										include_once("model/UserDAO.php");
										include_once("model/AnswerDAO.php");
										include_once ("model/DAOContests.php");	
										$username = strval($_GET['username']);
										$r = User::getInstance() -> getUser($username);
										//$u = array_values($r)[0]; 
										while ($u = mysql_fetch_assoc($r)){
											break;											
										}
										echo '<h4>' . $u['username'] . ' <button class="btn btn-default">
										<i class="glyphicon glyphicon-edit"></i>Editar</button></h4>';
										echo '<p><i class="glyphicon glyphicon-envelope"></i>' . $u['email'] . '<br /></p>';

										echo '<div class="panel panel-default">';

										// questions

										$questions = Question::getInstance() -> getQuestionsFromUser($u['username']);
										echo '<div class="panel-heading">Últimas preguntas</div>';
										echo '<div class="panel-body">';				
										echo '<ul>';
										
										
										while ($q = mysql_fetch_assoc($questions)){
											echo "<li><a href='respuestas.php?id=" . $q['id'] . "'>" . $q['title'] . "</a></li>";
										}	
										echo '</ul>';
										echo '</div>';
										echo '</div>';

										// parte de las respuestas

										$answers = Answer::getInstance() -> getAnswersFromUser($u['username']);
										echo '<div class="panel panel-default">
										<div class="panel-heading">Últimas respuestas</div>
										<div class="panel-body">
											<ul>';

										while ($a = mysql_fetch_assoc($answers)){
											echo '<li><a href="question?id=' . $a['questionID'] . '">' . $a['text'] . '</a></li>';											
										}

										//echo '<li><a href="">¿Dónde se come mejor?</a> - ¡Hola! Sin duda...</li>';
										echo '</ul></div></div>';

									?>																																																																									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</body>
	</html>