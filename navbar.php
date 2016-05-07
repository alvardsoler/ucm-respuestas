<?php 
session_start();
?>
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
				<li><a href="last_questions.php">Últimas preguntas</a></li>
				<!-- registrado -->
				<!-- <li><a href="#about">Usuario</a></li>
				<li><a href="#about">Preguntar</a></li> -->
			</ul>			
			<ul class="nav navbar-nav pull-right">
				<?php
				if (isset($_GET['run'])) $linkchoice=$_GET['run']; 
				else $linkchoice = '';

				if ($linkchoice == 'logout'){
					unset($_SESSION['username']);
					unset($_SESSION['loggedin']);
				}
								
				if (isset($_SESSION['loggedin'])){
					echo '<li> <a href="user.php?username=' . $_SESSION['username'] . '">' .$_SESSION['username'] . '</a> </li>';
					echo '<li><a href="?run=logout">Desconectarse</a></li>';
				}else{
					echo '<li><a href="login.php">Inicia sesión</a></li>
				<li><a href="registro.php">Registrarse</a></li>';	
				}
			?>
				
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>