<?php
	include('../../conexi.php');
	$link = Conectarse();
	include("../../funciones/generar_select.php");
	include("../../funciones/create_list.php");
	$page_title = "Calificaciones por Alumno";
	
?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="../assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			Captura de Calificaciones
		</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<?php include("../styles.php")?>
	</head>
	
	<body class="">
		<div class="wrapper ">
			<?php include("../sidebar.php")?>
			<div class="main-panel" id="main-panel">
				<!-- Navbar -->
				<?php include("../navbar.php")?>
				<!-- End Navbar -->
				<div class="panel-header panel-header-sm">
				</div>
				<div class="content">
					<div class="row">
						<div class="col-3 d-print-none">
							
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Filtros:</h4>
								</div>
								<div class="card-body">
									<form id="form_filtros" class="was-validated">
										<label>Grupo: </label>
										<select name="id_grupos" required class="form-control">
											<option value="">Elige</option>
											<option value="1">Grupo 1</option>
											<option value="2">Grupo 2</option>
											<option value="3">Grupo 3</option>
										</select>
										
										<label>Alumno: </label>
										<div id="list_alumnos">
										<?= create_list($link, "alumnos", "id_alumnos", "nombre_alumno", [0=> ["name" => "id_grupos" , "value" => "1"]]	);	?>
										</div>
										<button class="btn mx-2 btn-lg btn-primary" type="submit">
											<i class="fas fa-search"></i> Buscar
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-9">
							<div class="card">
								<div class="card-header" hidden>
									
									<button onclick="window.print();" class="btn btn-info float-right">
										<i class="fas fa-print"></i>	Imprimir
									</button>
									<input class="form-control" placeholder="Buscar"> 
									
									
								</div>
								<div class="card-body">
									<div class="" id="lista_calificaciones">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<?php include("../scripts.php")?>
		<script src="calificaciones.js?v=<?= date("d-m-Y-H-i-s")?>"></script>
		
	</body>
	
</html>						