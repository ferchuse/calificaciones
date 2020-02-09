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
	calificaciones
	LEFT JOIN materias USING (id_materias)
	LEFT JOIN alumnos USING (id_alumnos)
	LEFT JOIN grupos USING (id_grupos)
	
	
	WHERE id_grupos = '{$_GET["id_grupos"]}'
	
	
	AND id_materias = '{$_GET["id_materias"]}'
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
	<pre hidden>
		<?php echo $consulta?>
	</pre>
	
	<h4 class="card-title">Materia: <?= $filas[0]["materia"]?></h4>
	<h4 class="card-title">Grupo: <?= $filas[0]["grupo"]?></h4>
	
	
	<table class="table table-bordered table-condensed">
		<thead>
			<tr>
				<th>Num</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Nombre(s)</th>
				<th>Calificación</th>
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
					<td><?= $fila["ape_pat"]?></td>
					<td><?= $fila["ape_mat"]?></td>
					<td><?= $fila["nombre_alumno"]?></td>
					<td>
						<input min="1" max="10" data-id_registro="<?= $fila["id_calificaciones"]?>" type="number" class="form-control calificacion" value="<?= $fila["final"]?>" >
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