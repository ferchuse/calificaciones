

$(document).ready(onLoad);



function onLoad(){
	// listarCalificaciones();
	
	
	$("#id_grupos").on("change", cargarAlumnos);
	
	
	$("#lista_calificaciones").on("change", ".calificacion", guardarCalificacion);
	
	
}

function filtrarRegistros(evt){
	console.log("filtrarRegistros()")
	evt.preventDefault();
	
	listarCalificaciones();
	
}


function getCalifAlumno(data_alumno){
	console.log("getCalifAlumno()")
	
	// let boton = $("#form_filtros").find(":submit");
	// let icono = boton.find(".fas");
	
	// boton.prop("disabled", true);
	// icono.toggleClass("fa-search fa-spinner fa-spin");
	
	$.ajax({
		url: 'consultas/lista_calif_alumno.php',
		data: data_alumno
		}).done(function(respuesta){
		$("#lista_calificaciones").html(respuesta)
		
		}).always(function(){
		
		// boton.prop("disabled", false);
		// icono.toggleClass("fa-search fa-spinner fa-spin");
	});
}

function cargarAlumnos(){
	console.log("cargarAlumnos()")
	
	$("#list_alumnos").html("<center><i class='fas fa-spinner fa-spin'></i></center>")
	
	$.ajax({
		url: '../alumnos/consultas/get_alumnos_por_grupo.php',
		data: {"id_grupos" : $("#id_grupos").val()}
		}).done(function(respuesta){
		$("#list_alumnos").html(respuesta)
		
		$('#list_alumnos a').click(function() { 
			console.log("activateLi()")
			$('a.list-group-item.active').removeClass("active"); 
			$(this).addClass("active"); 
			getCalifAlumno($(this).data());
			
		}); 
		
		
		}).always(function(){
		
		
	});
}



function guardarCalificacion(event){
	console.log("guardarCalificacion()");
	event.preventDefault();
	let input = $(this);
	
	
	input.addClass('cargando');
	
	$.ajax({
		url: 'consultas/guardar_calificacion.php',
		method: 'POST',
		dataType: 'JSON',
		data: {
			id_registro : input.data("id_registro"),
			nuevo_valor : input.val()
		}
		}).done(function(respuesta){
		if(respuesta.estatus == 'success'){
			alertify.set('notifier','position', 'bottom-left');
			alertify.success('Se ha guardado correctamente');
			
			// listarCalificaciones();
		}
		else{
			alertify.error('Ocurrio un error');
		}
		}).always(function(){
		// input.removeClass('cargando');
		});
	}
	
	
	
	
	
	
	
