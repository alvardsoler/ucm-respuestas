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
														// trying to log in
							if (isset($_POST['login']) && !empty($_POST['username'])
								&& !empty($_POST['password'])) {							
								include_once("model/QuestionDAO.php");
								include_once("model/UserDAO.php");																	
								$r = User::getInstance() -> checkUserPassword($_POST['username'], $_POST['password']);
															if (!empty($r)){
									$_SESSION['loggedin'] = true;
									$_SESSION['timeout'] = time();
									$_SESSION['username'] = $_POST['username'];
									header("Location: last_questions.php");									
									}else {
										echo "errorrrrrrrrr";
									}
								}else if (isset($_POST['login']) && !empty($_POST['username'])
								&& !empty($_POST['password'])){
									echo "Hola " . $_SESSION['username'];
								}else{
								// not trying to log in
									echo '<form id="regForm" method="post" action="login.php"><h3 class="dark-grey">Login</h3>
													<div class="form-group col-lg-12"><label>Username</label>
													<input type="" name="username" minLength="4" class="form-control" id="username" value="otro" required>
													</div><div class="form-group col-lg-12"><label>Password</label>
													<input type="password" name="password" minLength="5" class="form-control" id="pass" value="12345" required>
													<button type="submit" class="form-control btn btn-success" name="login">Entrar</button>
															</div></div>';
								}
							
							?>
						</div>
					</section>
				</div>
			</div>
		</body>
	</html>