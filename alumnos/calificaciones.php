<!DOCTYPE html>
<html lang="es">
	
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="../assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			Mis Calificaciones
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
	
	<body class="">
		<div class="wrapper ">
			<div class="sidebar" data-color="blue">
				<div class="logo">
					<a href="https://centrocfac.com" class="simple-text logo-mini">
							<img src="../assets/img/favicon.png" class="img-fluid">
					</a>
					<a href="https://centrocfac.com" class="simple-text logo-normal">
						CFAC
					</a>
				</div>
				<div class="sidebar-wrapper" id="sidebar-wrapper">
					<ul class="nav">
						<li class=" ">
							<a href="./perfil.php">
								<i class="now-ui-icons users_single-02"></i>
								<p>Mi Perfil</p>
							</a>
						</li>
						<li class="active">
							<a href="./calificaciones.php">
								<i class="now-ui-icons design_bullet-list-67"></i>
								<p>Mis Calificaciones</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-panel" id="main-panel">
				<!-- Navbar -->
				<?php include("navbar.php")?>
			<!-- End Navbar -->
			<div class="panel-header panel-header-sm">
			</div>
			<div class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">  </h4>
								<h4 class="card-title"> Modalidad: Bachillerato 18 meses </h4>
								<h4 class="card-title"> Grupo: 2º Trimestre </h4>
							</div>
							
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table bordered">
										
										<tr class="bg-secondary">
											
											
											<th><mark> MATERIA </mark></th>
											<th><mark> DOCENTE </mark></th>
											<th><mark> CALIFICACION </mark></th>
											
											
										</tr>
										
										
										<tr class="bg">
											
											
											<td><b> INGLES </b></td>
											<td><b> CALEB GOMEZ </b></td>
											<td><b> 8 </b></td>
											
											
										</tr>
										
										
										<tr class="bg">
											
											
											<td><b> ESPAÑOL </b></td>
											<td><b> HUGO HERNANDEZ </b></td>
											<td><b> 9 </b></td>
											
											
										</tr>
										<tr class="bg">
											
											
											<td><b> CALCULO </b></td>
											<td><b> EDUARDO MEJIA</b></td>
											<td><b> 7 </b></td>
											
											
										</tr>
										
										
									</table>
									
									
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