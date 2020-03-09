<?php 
	
	include('../../../conexi.php');
	include('../../../funciones/generar_select.php');
	include('../../../funciones/console_log.php');
	$link = Conectarse();
	$filas = array();
	$respuesta = array();
	
	
	
	$consulta = "SELECT
	*
	FROM
	alumnos
	
	WHERE id_grupos = '{$_GET["id_grupos"]}'
	";
	
	
	
	$consulta.="
	ORDER BY ape_pat, ape_mat ASC "
	;
	
	
	$result = mysqli_query($link,$consulta);
	if($result){
		
		if( mysqli_num_rows($result) == 0){
			die("<div class='alert alert-danger'>No hay registros 	</div> ");
			
		}
		
		
		while($row = mysqli_fetch_assoc($result)){
			
			$filas[] = $row;
		}
	?> 
	<pre hidden	>
		<?php echo $consulta?>
	</pre>

	<table class="table table-bordered table-condensed">
		<thead>
			<tr>
				<th>Num</th>
				<th>Matricula</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Nombre(s)</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$num = 0;
				foreach($filas as $fila){
					$num++;
				?>
				<tr>
					
					<td><?= $num?></td>
					<td><?= $fila["matricula"]?></td>
					<td><?= $fila["ape_pat"]?></td>
					<td><?= $fila["ape_mat"]?></td>
					<td><?= $fila["nombre_alumno"]?></td>
					<td>
						<button class="btn btn-warning btn_editar" data-id_registro="<?php echo $fila["id_alumnos"] ?>">
							<i class="fa fa-edit"></i> Editar
						</button>
						<button class="btn btn-danger btn_borrar" data-id_registro="<?php echo $fila["id_alumnos"] ?>">
							<i class="fa fa-trash"></i> Borrar
						</button>
						<a class="btn btn-info" href="../calificaciones/calif_alumno.php?id_alumnos"<?= $fila["id_alumnos"] ?>">
							<i class="fa fa-chalkboard"></i> Calificaciones
						</a>
					</td>
					
					
				</tr>
				
				<?php
				}
			?>
			
			
		</tbody>
		<tfoot>
			<tr class="bg-secondary text-white">
				<td colspan="6"><?= $num?> Alumnos</td>
				
			</tr>
		</tfoot>
	</table>
	
	<?php
		
	}
	
	else {
		echo "Error en ".$consulta.mysqli_Error($link);
		
	}
	
	
?>						