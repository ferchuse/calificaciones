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
						<div class="col-3">
							
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Filtrar por:</h4>
								</div>
								<div class="card-body">
									<form>
										<select id="grupo" name="grupo" class="form-control">
											<option value="*">Todas los Grupos</option>
										</select>
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
									<input class="form-control" placeholder="Buscar"> 
									
									
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead class=" text-primary">
												<th>
													Nombre
												</th>
												<th>
													Grupo
												</th>
												<th>
													Acciones
												</th>
											</thead>
											<tbody>
												<tr>
													<td>
														Dakota Rice
													</td>
													<td>
														Niger
													</td>
													<td>
														Oud-Turnhout
													</td>
													<td class="text-right">
														$36,738
													</td>
												</tr>
												<tr>
													<td>
														Minerva Hooper
													</td>
													<td>
														Curaçao
													</td>
													<td>
														Sinaai-Waas
													</td>
													<td class="text-right">
														$23,789
													</td>
												</tr>
												<tr>
													<td>
														Sage Rodriguez
													</td>
													<td>
														Netherlands
													</td>
													<td>
														Baileux
													</td>
													<td class="text-right">
														$56,142
													</td>
												</tr>
												
											</tbody>
										</table>
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
		
		<script>
			
			$(".nuevo").click(function(){
				$("#modal_edicion").modal("show")
				
			});
			
			$("#form_edicion").submit(guardarRegistro);
			$(".btn_editar").click(cargarDatos);
			$(".btn_borrar").click(confirmaBorrar);
			
			
			
			$('.fileupload').fileupload({
				dataType: 'json',
				done: function (e, data) {
					
					$form_group = $(this).closest(".form-group");
					
					$.each(data.result.files, function (index, file) {
						$form_group.find(".url").val("/atoshka/fileupload/files/"+file.name);
						
						$form_group.find("img").attr("src", "/atoshka/fileupload/files/"+file.name);
						
					});
				},
				progressall: function (e, data) {
					$form_group = $(this).closest(".form-group");
					
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$form_group.find(".progress-bar").css("width" , progress +"%");
					$form_group.find(".progress-bar").html(progress +"%");
				}
			});
			
			
			
			function cargarDatos(event){
				console.log("event", event);
				let $boton = $(this);
				let $icono = $(this).find(".fas");
				let $id_registro = $(this).data("id_registro");				
				$boton.prop("disabled", true);
				$icono.toggleClass("fa-edit fa-spinner fa-spin");				
				$.ajax({ 
					"url": "../funciones/fila_select.php",
					"dataType": "JSON",
					"data": {
						"tabla": "departamentos",
						"id_campo": "id_departamentos",
						"id_valor": $id_registro						
					}
					}).done( function alTerminar (respuesta){					
					console.log("respuesta", respuesta);
					
					$.each(respuesta.data, function(key, value){
						
						$("#"+key).val(value);
						switch(key){
							case "foto":
							$("#foto_thumb").attr("src", value);
							break;
							
							case "colores":
							$("#colores_thumb").attr("src", value);
							break;
							
							default:
							
							
						}
					})
					
					
					$("#modal_edicion").modal("show")
					
					
					}).fail(function(){
					
					
					}).always(function(){
					$boton.prop("disabled", false);
					$icono.toggleClass("fa-edit fa-spinner fa-spin"); 
					
				})
			}
			
			function guardarRegistro(event){
				console.log("guardarRegistro")
				event.preventDefault()
				let $boton = $(this).find(':submit');
				let $icono = $(this).find(".fas");
				$boton.prop("disabled", true);
				$icono.toggleClass("fa-save fa-spinner fa-spin");
				
				$.ajax({ 
					"url": "guardar_catalogo.php",
					"dataType": "JSON",
					"method": "POST",
					"data": $("#form_edicion").serializeArray()
					}).done( function alTerminar (respuesta){
					console.log("respuesta", respuesta);
					$("#modal_edicion").modal("hide");
					window.location.reload(true);
					}).fail(function(xhr, textEstatus, error){
					console.log("textEstatus", textEstatus);
					console.log("error", error);
					
					}).always(function(){
					
					$boton.prop("disabled", false);
					$icono.toggleClass("fa-save fa-spinner fa-spin"); 
				});
				
			}		
			function confirmaBorrar(event){
				console.log("confirmaBorrar")
				let $boton = $(this);
				let $fila = $(this).closest('tr');
				let $icono = $(this).find(".fas");
				$boton.prop("disabled", true);
				$icono.toggleClass("fa-trash fa-spinner fa-spin");
				
				if(confirm("¿Estás Seguro?")){
					$.ajax({ 
						"url": "../funciones/fila_delete.php",
						"dataType": "JSON",
						"method": "POST",
						"data": {
							"tabla": "departamentos",
							"id_campo": "id_departamentos",
							"id_valor": $boton.data("id_registro")
						}
						}).done( function alTerminar (respuesta){
						console.log("respuesta", respuesta);
						
						$fila.remove();
						}).fail(function(xhr, textEstatus, error){
						console.log("textEstatus", textEstatus);
						console.log("error", error);
						
						}).always(function(){
						
						$boton.prop("disabled", false);
						$icono.toggleClass("fa-trash fa-spinner fa-spin"); 
					});
				}
			}		
		</script>
		
	</body>
	
</html>						