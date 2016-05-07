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
						echo '<input type="hidden" id="hidId" value="' . $q["id"] . '"></input>';
						echo '<div class="panel-body"><p>' . $q['text'] . '</p><footer class="text-right">
						<a href="user.php?username=' . $q['username'] . '">' . $q['username'] .'</a></footer></div></div>';

						$answers = Answer::getInstance() -> getAnswersFromQuestion($idQuestion);
						
						$i = 0;
						
						while ($a = mysql_fetch_assoc($answers)){
							if ($i == 0) echo '<div class="panel panel-info">';
							$i++;
							echo '<div class="panel-heading"><a href="user.php?username=' . $a['username'] . '">' . $a['username'] . '</a></div><div class="panel-body"><p>' . $a['text'] . '</p></div>';
						}
						if ($i > 0)
							echo '</div>';

						if (isset($_SESSION['loggedin'])){
							echo '<input type="hidden" id="hidUsername" value="' . $_SESSION["username"] . '"></input>';
							echo '<div class="input-group"><textarea class="form-control custom-control" id="ansText" rows="3" style="resize:none" minlength="5" required>
							</textarea> <span class="input-group-addon btn btn-primary" onClick="answer()">Responder</span></div>';
						}
					?>		
				</div>
				
			</div>
			<script type="text/javascript">
			/* validate form */
			function answer(){
				var username = $("#hidUsername").val();		
				var text = $("#ansText").val();
				var id = $("#hidId").val();
				$.post("postAnswer.php", {username: username, text: text, id: id}, function(data){
					location.reload();
				});
			}
			
			</script>
		</body>
	</html>