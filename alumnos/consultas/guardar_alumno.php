<?php 

	include("../../conexi.php");
	$link = Conectarse();
	
	$respuesta = array();
	
	$consulta = "
	UPDATE alumnos SET
	contrasena = '{$_POST["contrasena"]}'
	WHERE id_alumnos =  '{$_POST["id_alumnos"]}'
	
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