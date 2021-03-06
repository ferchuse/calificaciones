<?php $menu_activo = "calificaciones"?>
<?php
	
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
			<?php include("menu.php")?>
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
									<h4 class="card-title text-primary"><?= $alumno["ape_pat"]." ".$alumno["ape_mat"]." ".$alumno["nombre_alumno"]?>  </h4>
									<h4 class="card-title"> Modalidad: Bachillerato 18 meses </h4>
									<h4 class="card-title"> Grupo: <?= $alumno["id_grupos"]?> </h4>
								</div>
								
								<div class="card-body">
									<?php
										$i = 1;
										foreach($trimestres AS $trimestre){
											
											if($i % 2 == 1) echo '<div class="row">';
										?>
										
										<div class="col-md-6">
											<h5 class="text-center"><?= $trimestre["nombre_trimestre"]?></h5>
											<table class="table table-striped table bordered">
												
												<tr class="bg-secondary text-white">
													<th>MATERIA </th>
													<th>CALIFICACIÓN </th>
												</tr>
												
												<?php
													$calificaciones = getCalificaciones($link,$trimestre["id_trimestre"] );
													
													foreach($calificaciones AS $calificacion){
													?>
													<tr class="bg">
														<td><b>  <?= $calificacion["materia"]?> </b></td>
														<td class="text-right"><b>  <?= $calificacion["final"]?> </b></td>
													</tr>
													<?php
													}
												?>
												
											</table>
										</div>
										
										<?php
											if($i % 2 == 0) echo '</div>';
											$i++;
										}
										
									?>
									
									
									
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