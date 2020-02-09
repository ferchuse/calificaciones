<?php 
	
	include('../conexi.php');
	$link = Conectarse();

	function getAlumno($link){
		
		$consulta = "SELECT
		*
		FROM
		alumnos
		WHERE id_alumnos = '{$_COOKIE["id_usuarios"]}'
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
	
	
?>						