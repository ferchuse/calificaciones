<?php 
	$menu_activo = "perfil";
	
	include("consultas/get_alumno.php");
	include("consultas/get_materias.php");
	
	$alumno = getAlumno($link);
	
	$trimestres = 
	[
	[
	"id_trimestre" =>"1",
	"nombre_trimestre" => "1er Trimestre"
	],
	[
	"id_trimestre" => "2",
	"nombre_trimestre" => "2o Trimestre"
	],
	[
	"id_trimestre" => "3",
	"nombre_trimestre" => "3er Trimestre"
	],
	[
	"id_trimestre" => "4",
	"nombre_trimestre" => "4o Trimestre"
	]
	];
	
	
?>


<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="../assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			Perfil del Alumno
		</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!-- CSS Files -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
		<!-- CSS Just for demo purpose, don't include it in your project -->
		<link href="../assets/demo/demo.css" rel="stylesheet" />
	</head>
	
	<body class="user-profile">
		<div class="wrapper ">
			<div class="sidebar" data-color="blue">
				<!--
					Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
				-->
				<div class="logo">
					<a href="cfac.com" class="simple-text logo-mini">
						CFAC
					</a>
					<a href="http://www.creative-tim.com" class="simple-text logo-normal">
						CFAC
					</a>
				</div>
				<?php include("menu.php");?>
			</div>
			<div class="main-panel" id="main-panel">
				<!-- Navbar -->
				<?php include("navbar.php")?>
				<!-- End Navbar -->
				<div class="panel-header panel-header-sm">
				</div>
				<div class="content">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-user">
								<div class="image">
									<img src="../assets/img/fondo_perfil.jpg" alt="...">
								</div>
								<div class="card-body">
									<div class="author">
										<a href="#">
											<img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
											<h5 class="title"><?= $alumno["nombre_alumno"]." ".$alumno["ape_pat"]?></h5>
										</a>
										<p class="description">
											3er Trimestre
										</p>
									</div>
									<p class="description text-center">
										
									</p>
								</div>
								<hr>
								<div class="button-container d-none">
									<button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
										<i class="fab fa-facebook-f"></i>
									</button>
									<button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
										<i class="fab fa-twitter"></i>
									</button>
									<button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
										<i class="fab fa-google-plus-g"></i>
									</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h5 class="title"> Mis Datos </h5>
								</div>
								<div class="card-body">
									<form id="form_alumno">
										<div class="row">
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<label> Matricula </label>
													<input type="text" readonly class="form-control" name="matricula" placeholder="Matricula">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Nombre: </label>
													<input type="text" readonly class="form-control" name="nombre_alumno"  value="<?= $alumno["nombre_alumno"]?>" placeholder="Nombre">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Apellido Paterno: </label>
													<input name="ape_pat" readonly type="text" class="form-control" placeholder="Apellido Paterno" value="<?= $alumno["ape_pat"]?>">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Apellido Materno </label>
													<input type="text" readonly name="ape_mat" class="form-control" placeholder="Apellido Materno" value="<?= $alumno["ape_mat"]?>">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> <b>Sexo:</b> </label>
													<select name="sexo" id="sexo" class="form-control">
														<option value="1"> MASCULINO </option>
														<option value="2"> FEMENINO </option>
													</select>
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Fecha De Nacimiento </label>
													<input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha De Nacimiento">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Telefono </label>
													<input type="tel" name="celular" class="form-control" placeholder="Teléfono">
												</div>
											</div>
											<div class="col-md-4 pl-1">
												<div class="form-group">
													<label for="exampleInputEmail1">Correo</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-md-4 pl-1">
												<div class="form-group">
													<label for="exampleInputEmail1">Contraseña</label>
													<input type="password" name="contrasena" class="form-control" value="<?= $alumno["contrasena"]?>">
												</div>
											<div class="col-md-4 pl-1">
												<div class="form-group">
													<label for="exampleInputEmail1">Grupo</label>
													<input type="password" name="contrasena" class="form-control" value="<?= $alumno["id_grupos"]?>">
												</div>
											</div>
										</div>
										
										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include("footer.php")?>
			</div>
		</div>
		<!--   Core JS Files   -->
		<script src="../assets/js/core/jquery.min.js"></script>
		<script src="../assets/js/core/popper.min.js"></script>
		<script src="../assets/js/core/bootstrap.min.js"></script>
		<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
		<!--  Google Maps Plugin    -->
		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Chart JS -->
	<script src="../assets/js/plugins/chartjs.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="../assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
	<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/demo/demo.js"></script>
	</body>
	
	</html>									