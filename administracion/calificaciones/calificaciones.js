

$(document).ready(onLoad);



function onLoad(){
	// listarCalificaciones();
	
	
	$("#form_filtros").on("submit", filtrarRegistros);
	
	
	// $("#lista_boletos").on("click", ".cancelar", confirmaCancelacion);
	
	
	
	// $("#lista_corridas").on("click", ".cancelar", confirmaCancelarCorrida);
	
	// $("#lista_corridas").on("click", ".imprimir", function(){
	// imprimirGuia($(this).data("id_registro"));
	// });
	$("#lista_calificaciones").on("change", ".calificacion", guardarCalificacion);
	
	
	
	
	// $('#form_corridas').on('submit', guardarCorrida);
	// $('#lista_corridas').on('click', ".btn_venta", abrirTaquilla);
	
	
	// $(".tipo_boleto").change(eligeBoleto );
	// $(".cantidad").change(calculaImporte );
	
	
}

function filtrarRegistros(evt){
	console.log("filtrarRegistros()")
	evt.preventDefault();
	
	listarCalificaciones();
	
}


function listarCalificaciones(){
	console.log("listarCorridas()")
	
	let boton = $("#form_filtros").find(":submit");
	let icono = boton.find(".fas");
	
	boton.prop("disabled", true);
	icono.toggleClass("fa-search fa-spinner fa-spin");
	
	$.ajax({
		url: 'consultas/lista_calificaciones.php',
		data: $("#form_filtros").serialize()
		}).done(function(respuesta){
		$("#lista_calificaciones").html(respuesta)
		
		}).always(function(){
		
		boton.prop("disabled", false);
		icono.toggleClass("fa-search fa-spinner fa-spin");
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










function imprimirGuia(id_corridas){
	console.log("imprimirGuia()", id_corridas);
	
	$.ajax({
		"url": "boletos_iv/imprimir_guias_escpos.php",
		"data": {
			"id_corridas": id_corridas
		}
		}).done(function(respuesta){
		printService.submit({
			'type': 'LABEL',
			'raw_content': respuesta
		});
		
	});
	
	
}





