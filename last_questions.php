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
		
		<?php
				include("navbar.php");
		?>
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