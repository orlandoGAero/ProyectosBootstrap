<?php
/**
 * Desarrollador: Orlando Reyes
 * Fecha: 02-01-2018
*/

	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login My App</title>
	<link rel="stylesheet" href="css/base.css">
	<!--bootstrap 4-->
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- bootstrap 3-->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" -->
</head>
<body>
	<div class="container">
		<header class="bg-dark">
			<div class="row">
				<div class="col-sm-2 col-md-12 text-center">
					<img id="img-header" src="img/logo.png" alt="Logo">
				</div>
				<div class="col-sm-10 col-md-12" style="text-align: center;">
					<h1 class="text-white">Sistema de Calificaciones</h1>
				</div>
			</div>
			<nav class="navbar navbar-dark bg-dark">
				<a href="login.php" class="navbar-brand">
					<!-- <img id="img-brand" src="img/logo.png" class="d-inline-block align-top" alt="Logo">
					<span>Inicio</span> -->
				</a>
			</nav>
		</header>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<img src="img/user.png" alt="avatar" id="userimg" class="rounded mx-auto d-block img-fluid">
				</div>
				<br>
				<div class="row justify-content-center">
					<form class="" action="register.php" name="register" method="post">
						<div class="form-group">
							<div class="row justify-content-center">
								<label class="col-form-label-lg" for="lb_email">Email</label>
							</div>
							<div class="row justify-content-center">
								<input type="email" class="form-control-md" name="txt_email" placeholder="demo@icloud.com" />
							</div>
						</div>
						<div class="form-group">
							<div class="row justify-content-center">
								<label class="col-form-label-lg" for="lb_password">Password</label>
							</div>
							<div class="row justify-content-center">
								<input type="password" class="form-control-md" name="txt_password" />
							</div>
						</div>
						<div class="form-group">
							<div class="row justify-content-center">
								<button class="btn btn-primary btn-lg" type="submit">Enviar</button>
							</div>
						</div>	
					</form>
				</div>
 			</div>
		</div>
		<footer class="card-footer text-center" style="background-color: #343a40;">
			<span style="color: #fff"><b>Copyright 2018 Pie de página</b></span>
		</footer>
	</div>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>