$(document).ready(function(){	$("#form_login").submit(login);			$('.nav-tabs a').on('shown.bs.tab', function(){		console.log("tab", $(this).prop("id"));				if($(this).prop("id") == "tab_alumnos"){						$("#alumnos input").prop("disabled", false) 			$("#admin input").prop("disabled", true) 		}		else{			$("#alumnos input").prop("disabled", true) 			$("#admin input").prop("disabled", false) 		}	});});function login(event){	event.preventDefault();			console.log("datos", $("#form_login").serialize())		$(":submit").prop("disabled", false);		$(":submit > .fa").toggleClass("fa sign-in fa-spinner fa-spin");	$.ajax({		"url": "login.php", 		"method": "POST", 		"data": $("#form_login").serialize(),		"success" : function(response, status){			console.log("response", response);			if(response.login == "valid"){				alertify.success("Acceso Correcto");				switch(response.permisos){					case 'alumnos':					location.href="../alumnos/productos.php";					break;					case 'admin':					location.href="../administracion/catalogos.php";					break;									}				}else{				alertify.error(response.mensaje);			}		},		"error": function(xhr, textStatus, errno){			console.log(xhr);			console.log(textStatus);			console.log(errno);			alertify.error("ERROR: " + textStatus);		}		}).always(function(){				$(":submit").prop("disabled", false);	});}