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
		<link href="../assets/css/alertify.min.css" rel="stylesheet" />
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
											
											<input value="<?= $alumno["id_alumnos"]?>" type="hidden" name="id_alumnos">
											<div class="col-md-3 pr-1">
												<div class="form-group">
												
													<label> Matricula </label>
													<input value="<?= $alumno["matricula"]?>" type="text" readonly class="form-control" name="matricula" placeholder="Matricula">
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
														<option <?= $alumno["sexo"] == "M" ? "selected" : ""?> value="M"> MASCULINO </option>
														<option <?= $alumno["sexo"] == "F" ? "selected" : ""?>  value="F"> FEMENINO </option>
													</select>
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Fecha De Nacimiento </label>
													<input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha De Nacimiento" <?= $alumno["fecha_nacimiento"] ?> >
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Telefono </label>
													<input type="tel" name="celular" class="form-control" placeholder="Celular" <?= $alumno["celular"]?> >
												</div>
											</div>
											<div class="col-md-2 pl-1">
												<div class="form-group">
													<label for="exampleInputEmail1">Grupo:</label>
													<input readonly type="number" name="grupo" class="form-control" value="<?= $alumno["id_grupos"]?>">
												</div>
											</div>
											<div class="col-md-4 pl-1">
												<div class="form-group">
													<label for="exampleInputEmail1">Correo</label>
													<input type="email" class="form-control" placeholder="Email" value=<?= $alumno["correo"]?>>
												</div>
											</div>
											<div class="col-md-3 pl-1">
												<div class="form-group">
													<label for="contrasena">Contraseña</label>
													<input type="password" id="contrasena" name="contrasena" class="form-control" value="<?= $alumno["contrasena"]?>">
												</div>
											</div>
											<div class="col-md-3 pl-1">
												<div class="form-group">
													<label for="contrasena2">Repite Contraseña</label>
													<input type="password" id="contrasena2" class="form-control" value="<?= $alumno["contrasena"]?>">
												</div>
											</div>
											
											<div class="col-md-4 pl-1">
												
												<button class="btn btn-success">
													<i class="fa fa-save"> </i> Guardar
												</button>
												
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
		<script src="../assets/js/alertify.min.js"></script>
		
		<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
		<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
		<script >
			
			$("#form_alumno").submit(guardarRegistro);
			
			function guardarRegistro(event){
				console.log("guardarRegistro()")
				event.preventDefault()
				
				if($("#contrasena").val() != $("#contrasena2").val())
				
				{
					alertify.error("Las contraseñas no coinciden")
					return false;
				}
				
				let $boton = $(this).find(':submit');
				let $icono = $(this).find(".fa");
				$boton.prop("disabled", true);
				$icono.toggleClass("fa-save fa-spinner fa-spin");
				
				$.ajax({ 
					"url": "consultas/guardar_alumno.php",
					"dataType": "JSON",
					"method": "POST",
					"data": $("#form_alumno").serialize()
					}).done( function alTerminar (respuesta){
					console.log("respuesta", respuesta);
					if(respuesta.estatus =="success" ){
						
						alertify.success("Guardado")
						
					}
					else{
						alertify.error("Ocurrio un error")
					}
					
					}).fail(function(xhr, textEstatus, error){
					console.log("textEstatus", textEstatus);
					console.log("error", error);
					
					}).always(function(){
					
					$boton.prop("disabled", false);
					$icono.toggleClass("fa-save fa-spinner fa-spin"); 
				});
				
			}	
			
		</script>
	</body>
	
</html>										