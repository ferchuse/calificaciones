<?php 

	include('../../../conexi.php');
	$link = Conectarse();
	
	$respuesta = array();
	
	$consulta = "
	UPDATE calificaciones SET
	final = '{$_POST["nuevo_valor"]}'
	WHERE id_calificaciones =  '{$_POST["id_registro"]}'
	
	
	";
	
	$result = 	mysqli_query($link,$consulta);
	
	
	$respuesta["consulta"] = $consulta;
	
	if($result){
		$respuesta["estatus"] = "success";
		$respuesta["mensaje"] = "Guardado Correctamente";
	}
	else{
		$respuesta["estatus"] = "error";
		$respuesta["mensaje"] = mysqli_error($link);		
	}
	
	
	
	echo json_encode($respuesta);
	
?>		