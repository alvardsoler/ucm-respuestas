<?php
function conectar($host, $usuario, $pass=''){
	$db = @mysqli_connect($host, $usuario, $pass);
	if ($db){
		echo 'Conexión realizada con exito. <br />';
		echo 'Información sobre el servidor: ', mysqli_get_host_info($db), '<br/>';
		echo 'Versión del servidor: ', mysqli_get_server_info($db), '<br/>';		
	}else{
		printf('Error %d: %s.<br/>', mysqli_connect_errno(), mysqli_connect_error());
		echo 'Error <br/>';
	}
	return $db;
}

function desconectar($conexion){
	if ($conexion){
		$ok = @mysqli_close($conexion);
		if ($ok){
			echo 'Desconexión realizada correctamente. <br />';			
		}else {
			echo 'Fallo en la desconexión. <br />';
		}
	}else {
		echo 'Conexión no abierta. <br />';
	}
}
function viewUsers($db){
	$sql = 'SELECT * FROM users';
	$consulta = mysqli_query($db, $sql);
	echo "<strong> lista de usuarios </strong>";
	if (mysqli_fetch_assoc($consulta))
		while ($fila = mysqli_fetch_assoc($consulta)){
			echo $fila['username'], ' - ' , $fila['email'] , '<br/>';
		}
	else
		echo "nada en la bd<br />";
}

function regUser($db, $username, $pass, $email, $showemail = false){
	echo 'registring user: ', $username,' ', $pass, ' ', $email, ' ', $showemail, "<br/>";
	$query = "INSERT INTO users(username, email, password, show_email) 
		VALUES('$username', '$email', '$pass', '$showemail')";
	echo "querying: ", $query, "<br/>";
	//$consulta = mysqli_query($db, $query);
	mysqli_query($db, $query) or trigger_error(mysqli_error($query));
}

	$db = conectar('localhost', 'root');
	
	if ($db) {

		regUser($db, $_POST['username'], $_POST['pass'], $_POST['email'], true);

		viewUsers($db);
		desconectar($db);
	}	
?>