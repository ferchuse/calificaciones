<?php 
	
	include('../../../conexi.php');
	$link = Conectarse();
	
	$respuesta = array();
	
	$consulta = "
	INSERT INTO 
	alumnos
	SET 
	
	id_alumnos = '{$_POST["id_alumnos"]}',
	matricula = '{$_POST["matricula"]}',
	nombre_alumno = '{$_POST["nombre_alumno"]}',
	ape_pat = '{$_POST["ape_pat"]}',
	ape_mat = '{$_POST["ape_mat"]}',
	correo = '{$_POST["correo"]}',
	contrasena = '{$_POST["contrasena"]}',
	celular = '{$_POST["celular"]}',
	sexo = '{$_POST["sexo"]}',
	id_grupos = '{$_POST["id_grupos"]}'
	
	
	ON DUPLICATE KEY UPDATE 
	
	id_alumnos = '{$_POST["id_alumnos"]}',
	matricula = '{$_POST["matricula"]}',
	nombre_alumno = '{$_POST["nombre_alumno"]}',
	ape_pat = '{$_POST["ape_pat"]}',
	ape_mat = '{$_POST["ape_mat"]}',
	correo = '{$_POST["correo"]}',
	contrasena = '{$_POST["contrasena"]}',
	celular = '{$_POST["celular"]}',
	sexo = '{$_POST["sexo"]}',
	id_grupos = '{$_POST["id_grupos"]}'
	
	
	
	
	";
	
	$result = 	mysqli_query($link,$consulta);
	
	
	$respuesta["consulta"] = $consulta;
	
	if($result){
		$respuesta["affected_rows"] = mysqli_affected_rows($link);
		
		$respuesta["estatus"] = "success";
		$respuesta["mensaje"] = "Guardado Correctamente";
	}
	else{
		$respuesta["estatus"] = "error";
		$respuesta["mensaje"] = mysqli_error($link);		
	}
	
	
	if($respuesta["affected_rows"] == 1){
		
		$insert_id = mysqli_insert_id($link);
		
		//INSERTA calificaciones
		
		$insert_materias = "INSERT INTO calificaciones (id_alumnos, id_materias)
		SELECT
		id_alumnos,
		id_materias
		FROM
		alumnos,
		materias
		WHERE alumnos.id_alumnos = '$insert_id'"; 
		
		$result = 	mysqli_query($link,$insert_materias);
		
		$respuesta["insert_materias"] = $insert_materias;
		
		if($result){
			$respuesta["estatus"]["materias"] = "success";
			$respuesta["mensaje"]["materias"] = "Materias Guardadas";
		}
		else{
			$respuesta["estatus"]["materias"] = "error";
			$respuesta["mensaje"]["materias"] = mysqli_error($link);		
		}
		
	}
	
	
	
	echo json_encode($respuesta);
	
?>		