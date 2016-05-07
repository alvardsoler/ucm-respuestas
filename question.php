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
			<?php
						if (isset($_SESSION['loggedin'])){			
			echo '<input type="hidden" id="hidUsername" value="' . $_SESSION["username"] . '"></input>';
			echo	'<div class="well question" ><div class="form-horizontal"><h2>Nueva pregunta</h2>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" minlength="3" required><div class="input-group">
				<textarea class="form-control custom-control" minlength="10" rows="3" style="resize:none" id="text" name="text" required></textarea>
				<span class="input-group-addon btn btn-primary" onclick="postQuestion()">
				Responder</span></div></form></div></div>';
	}else{
		header("Location: login.php");
	}
	?>
	<script type="text/javascript">
	function postQuestion(){
	var username = $("#hidUsername").val();	
	var title = $("#titulo").val();
	var text = $("#text").val();
	$.post("postQuestion.php", {username: username, title: title, text: text}, function(data){
		document.location ="last_questions.php";
	});
	}
	</script>
	
</div>
</body>
</html>