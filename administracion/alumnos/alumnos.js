

$(document).ready(onLoad);



function onLoad(){
	
	$("#form_filtros").on("submit", filtrarRegistros);
	
	$(".nuevo").click(function(){
		$("#id_alumnos").val("");
		$("#form_edicion")[0].reset();
		
		$("#modal_edicion").modal("show");
	});
	
	$("#form_edicion").submit(guardarRegistro);
	$("#lista_alumnos").on("click", ".btn_editar", cargarDatos);
	$("#lista_alumnos").on("click", ".btn_borrar", confirmaBorrar);
	
}

function filtrarRegistros(evt){
	console.log("filtrarRegistros()")
	evt.preventDefault();
	
	listarRegistros();
	
}


function listarRegistros(){
	console.log("listarRegistros()")
	
	let boton = $("#form_filtros").find(":submit");
	let icono = boton.find(".fas");
	
	boton.prop("disabled", true);
	icono.toggleClass("fa-search fa-spinner fa-spin");
	
	$.ajax({
		url: 'consultas/listar.php',
		data: $("#form_filtros").serialize()
		}).done(function(respuesta){
		$("#lista_alumnos").html(respuesta)
		
		}).always(function(){
		
		boton.prop("disabled", false);
		icono.toggleClass("fa-search fa-spinner fa-spin");
	});
}







function cargarDatos(event){
	
	$("#form_edicion")[0].reset();
	let $boton = $(this);
	let $icono = $(this).find(".fas");
	let $id_registro = $(this).data("id_registro");		
	
	$boton.prop("disabled", true);
	$icono.toggleClass("fa-edit fa-spinner fa-spin");		
	
	$.ajax({ 
		"url": "../../funciones/fila_select.php",
		"dataType": "JSON",
		"data": {
			"tabla": "alumnos",
			"id_campo": "id_alumnos",
			"id_valor": $id_registro						
		}
		}).done( function alTerminar (respuesta){					
		// console.log("respuesta", respuesta);
		
		$.each(respuesta.data, function(key, value){
			
			$("#"+key).val(value);
			
		})
		
		$("#modal_edicion").modal("show");
		
		}).fail(function(){
		
		
		}).always(function(){
		$boton.prop("disabled", false);
		$icono.toggleClass("fa-edit fa-spinner fa-spin"); 
		
	})
}

function guardarRegistro(event){
	console.log("guardarRegistro()")
	event.preventDefault()
	let $boton = $(this).find(':submit');
	let $icono = $(this).find(".fas");
	$boton.prop("disabled", true);
	$icono.toggleClass("fa-save fa-spinner fa-spin");
	
	$.ajax({ 
		"url": "consultas/guardar.php",
		"dataType": "JSON",
		"method": "POST",
		"data": $("#form_edicion").serializeArray()
		}).done( function alTerminar (respuesta){
		console.log("respuesta", respuesta);
		if(respuesta.estatus =="success" ){
			
			alertify.success("Guardado")
		}
		else{
			alertify.error("Ocurrio un error")
		}
		$("#modal_edicion").modal("hide");
		listarRegistros();
		// window.location.reload(true);
		}).fail(function(xhr, textEstatus, error){
		console.log("textEstatus", textEstatus);
		console.log("error", error);
		
		}).always(function(){
		
		$boton.prop("disabled", false);
		$icono.toggleClass("fa-save fa-spinner fa-spin"); 
	});
	
}		
function confirmaBorrar(event){
	console.log("confirmaBorrar")
	let $boton = $(this);
	let $fila = $(this).closest('tr');
	let $icono = $(this).find(".fas");
	$boton.prop("disabled", true);
	$icono.toggleClass("fa-trash fa-spinner fa-spin");
	
	if(confirm("¿Estás Seguro?")){
		$.ajax({ 
			"url": "../funciones/fila_delete.php",
			"dataType": "JSON",
			"method": "POST",
			"data": {
				"tabla": "departamentos",
				"id_campo": "id_departamentos",
				"id_valor": $boton.data("id_registro")
			}
			}).done( function alTerminar (respuesta){
			console.log("respuesta", respuesta);
			
			$fila.remove();
			}).fail(function(xhr, textEstatus, error){
			console.log("textEstatus", textEstatus);
			console.log("error", error);
			
			}).always(function(){
			
			$boton.prop("disabled", false);
			$icono.toggleClass("fa-trash fa-spinner fa-spin"); 
		});
	}
}




