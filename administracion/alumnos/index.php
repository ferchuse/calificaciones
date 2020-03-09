<?php
	include("../../funciones/generar_select.php");
	$page_title = "Alumnos";
	
?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="../assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			Alumnos
		</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		
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
						<div class="col-3">
							
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Filtrar por:</h4>
								</div>
								<div class="card-body">
									<form id="form_filtros" class="was-validated">
										<select name="id_grupos" required class="form-control">
											<option value="">Elige</option>
											<option value="1">Grupo 1</option>
											<option value="2">Grupo 2</option>
											<option value="3">Grupo 3</option>
										</select>
										<button class="btn mx-2 btn-lg btn-primary" type="submit">
											<i class="fas fa-search"></i> Buscar
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-9">
							<div class="card">
								<div class="card-header">
									<button class="nuevo btn btn-success float-right">
										<i class="now-ui-icons ui-1_simple-add"></i>	Nuevo
									</button>
									<input hidden class="form-control" placeholder="Buscar"> 
									
									
								</div>
								<div class="card-body">
									<div class="" id="lista_alumnos">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<?php include("form_alumnos.php")?>
		<?php include("../scripts.php")?>
		
		<script src="alumnos.js?v=<?= date("d-m-Y-H-i-s")?>"></script>
		
	</body>
	
</html>						