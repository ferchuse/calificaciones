<?php
	
	include("../../../conexi.php");
	
	$link = Conectarse();
	
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
	
	
	function getCalificaciones($link, $id_trimestre, $id_alumnos){
		$respuesta= [];
		
		$consulta = "SELECT
		*
		FROM
		materias
		LEFT JOIN calificaciones USING(id_materias)
		WHERE
		id_trimestre = '{$id_trimestre}'
		AND id_alumnos = '{$id_alumnos}'
		ORDER BY materia
		";
		
		$respuesta["consulta"]= $consulta;
		
		$result = mysqli_query($link,$consulta);
		if($result){
			
			if( mysqli_num_rows($result) == 0){
				die("<div class='alert alert-danger'>No hay registros 	</div> ");
				
			}
			
			
			while($row = mysqli_fetch_assoc($result)){
				
				$filas[] = $row;
			}
			
			$respuesta["filas"] = $filas;
			
		}
		
		else {
			$respuesta["estatus"] = "error";
			$respuesta["error"] = mysqli_error($link);
		}
		return $respuesta;
	}
	
?>

<?php
	$i = 1;
	foreach($trimestres AS $trimestre){
		
		if($i % 2 == 1) echo '<div class="row">';
	?>
	
	<div class="col-md-6">
		<h5 class="text-center"><?= $trimestre["nombre_trimestre"]?></h5>
		<table class="table  table bordered">
			
			<tr class="bg-secondary text-white">
				<th>MATERIA </th>
				<th>CALIFICACIÓN </th>
			</tr>
			
			<?php
				$calificaciones = getCalificaciones($link,$trimestre["id_trimestre"], $_GET["id_alumnos"]);
				
				// echo print_r($calificaciones);
				
				foreach($calificaciones["filas"] AS $calificacion){
				?>
				<tr class="bg">
					<td><b>  <?= $calificacion["materia"]?> </b></td>
					<td class="text-right">
						<input min="1" max="10" data-id_registro="<?= $calificacion["id_calificaciones"]?>" type="number" class="form-control calificacion" value="<?= $calificacion["final"]?>" >
					</td>
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