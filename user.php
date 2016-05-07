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
		
		<?php
			include("navbar.php");
		?>
		<div class="container">
			<div class="row profile">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="well well-sm">
						<div class="row">
							
							<div class="col-sm-12 col-md-12">
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
									echo '<h2>' . $u['username'] . '</h2>';
									echo '<p><i class="glyphicon glyphicon-envelope"></i><a href="mailto:' . $u['email'] . '">' . $u['email'] . '</a><br /></p>';
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