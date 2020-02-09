<?php
	if(isset($_GET["redirect_url"])){
		
		$redirect_url =$_GET["redirect_url"]; 
	} 
	else{
		$redirect_url = "";
		
	}
	
	
	include("../conexi.php");
	$link = Conectarse();
	
?>
<!DOCTYPE html>
<html lang="es">
	
	<head>
    <title>Iniciar Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/alertify.min.css" />
		
    <link rel="stylesheet" type="text/css" href="login.css?<?= date("d-m-y-h-i-s")?>" />
		
		
		
	</head>
	
	<body>
    <div class="container">
			<div class="row" id="pwd-container">
				<div class="col-md-4"></div>
				
				<div class="col-md-4">
					<section class="login-form">
						<form name="form_login" id="form_login" action="" role="login" >
							
							<div id="login_logo">
								<img class="img-fluid" src="logo_login.png">
							</div>
							
							
							<b>Tipo de Acceso: </b> </br>
							<label><input type="radio" name="tipo_usuario" value="alumno"  required/> Alumno 	</label>
							<label><input type="radio" name="tipo_usuario" value="admin"  required/> Administracion 	</label>
							
							<div class="form-group">
								<input name="username" placeholder="Matrícula/ Nombre de Usuario" required class="form-control">
							</div>
							
						
							<input type="password" name="password" class="form-control " placeholder="Contraseña" required="" />
							
							<button type="submit"  name="iniciar" class="btn btn-lg btn-primary btn-block">
								<i class="fa fa-sign-in"></i> Iniciar Sesión
							</button>
							
							
							
						</form>
						
					</section>
					
				</div>
				
				
			</div>
		</div>
		
		
		<script  src="../assets/js//core/jquery.min.js"></script>
		<script  src="../assets/js/core/bootstrap.min.js"></script>
		<script  src="../assets/js/alertify.min.js"></script>
		<script  src="login.js"></script>
	</body>
	
</html>		