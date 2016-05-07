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
		
	<?php
			include("navbar.php");
		?>
			<div class="container">
				<div class="container-fluid">
					<section class="container">
						<div class="container-page">
							<div class="col-md-6">
								<?php
function conectar($host, $usuario, $pass=''){	
	$db = @mysqli_connect($host, $usuario, $pass, 'mibd');
	if (!$db){
		printf('Error %d: %s.<br/>', mysqli_connect_errno(), mysqli_connect_error());
		echo 'Error <br/>';
	}
	/*
	if ($db){
		echo 'Conexión realizada con exito. <br />';
		echo 'Información sobre el servidor: ', mysqli_get_host_info($db), '<br/>';
		echo 'Versión del servidor: ', mysqli_get_server_info($db), '<br/>';		
	}else{
		
	}*/

	return $db;
}

function desconectar($conexion){
	if ($conexion){
		$ok = @mysqli_close($conexion);
		/*if ($ok){
			echo 'Desconexión realizada correctamente. <br />';			
		}else {
			echo 'Fallo en la desconexión. <br />';
		}*/
	}else {
		echo 'Conexión no abierta. <br />';
	}
}
function viewUsers($db){
	$sql = 'SELECT * FROM users';
	$consulta = mysqli_query($db, $sql);	
	echo "<h1> Lista de usuarios </h1>";	
	while ($fila = mysqli_fetch_assoc($consulta)){
			echo $fila['username'], ' - ' , $fila['email'] , '<br/>';
		}

}

function regUser($db, $username, $pass, $email, $showemail = false){
	//echo 'registring user: ', $username,' ', $pass, ' ', $email, ' ', $showemail, "<br/>";
	$query = "INSERT INTO users(username, email, password, show_email) 
		VALUES('$username', '$email', '$pass', '$showemail')";
	// echo "querying: ", $query, "<br/>";
	// $consulta = mysqli_query($db, $query);
	$result = mysqli_query($db, $query);

	if ($result){
		echo "<p>Usuario ", $username, " registrado con éxito.</p>";
	}

}

	$db = conectar('localhost', 'root');
	
	if ($db) {

		regUser($db, $_POST['username'], $_POST['pass'], $_POST['email'], true);

//		viewUsers($db);
		desconectar($db);
	}	
?>
						</div>
					</section>
				</div>
			</div>
		</body>
	</html>	