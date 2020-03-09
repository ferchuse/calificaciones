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
		
		
		$list = "<div class='list-group $class '>";
		
		while($fila = mysqli_fetch_assoc($result)){
			$list.= "<a href='#' data-nombre='{$fila["nombre_alumno"]} {$fila["ape_pat"]} {$fila["ape_mat"]}' data-id_registro='{$fila["id_alumnos"]}' class='list-group-item list-group-item-action py-1'>{$fila["nombre_alumno"]} {$fila["ape_pat"]} </a>";
			
			
		}	
		
		
	}
	
	else {
		echo "Error en ".$consulta.mysqli_Error($link);
		
	}
	
	echo $list;
	
?>						