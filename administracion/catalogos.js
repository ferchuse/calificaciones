listarAlumnos();


function listarAlumnos(){

	$.ajax({
		"consultas/listar_alumnos.php"
	
	}).done(function(respuesta){
	
		$("#tabla_alumnos").html(respuesta);
	
	})

}