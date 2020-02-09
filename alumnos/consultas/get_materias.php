<?php 
	
	function getMaterias($link, $id_trimestre){
		
		$consulta = "SELECT
		*
		FROM
		materias
		WHERE id_trimestre = '{$id_trimestre}'
		";
		
		
		
		$result = mysqli_query($link,$consulta);
		if($result){
			
			if( mysqli_num_rows($result) == 0){
				die("<div class='alert alert-danger'>No hay registros 	</div> ");
				
			}
			
			
			while($row = mysqli_fetch_assoc($result)){
				
				$filas = $row;
			}
			
			return $filas;
			
		}
		
		else {
			return "Error";
		}
	}
	function getCalificaciones($link, $id_trimestre){
		
		$consulta = "SELECT
		*
		FROM
		materias
		LEFT JOIN calificaciones USING(id_materias)
		WHERE
		id_trimestre = '{$id_trimestre}'
		AND id_alumnos = '{$_COOKIE["id_usuarios"]}'
		ORDER BY materia
		";
		
		
		
		$result = mysqli_query($link,$consulta);
		if($result){
			
			if( mysqli_num_rows($result) == 0){
				die("<div class='alert alert-danger'>No hay registros 	</div> ");
				
			}
			
			
			while($row = mysqli_fetch_assoc($result)){
				
				$filas[] = $row;
			}
			
			return $filas;
			
		}
		
		else {
			return "Error";
		}
	}
	
	
?>						