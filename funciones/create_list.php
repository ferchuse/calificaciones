<?php
	
	// include("../conexi.php");
	
	// $link = Conectarse();
	
	function create_list($link, $tabla, $llave_primaria, $campo_etiqueta, $filtros, $id_selected = 0, $class = ""){
		$consulta = "SELECT * FROM $tabla WHERE {$filtros[0]['name']} = '{$filtros[0]['value']}' ORDER BY $campo_etiqueta ";
		$result = mysqli_query($link, $consulta);
		
		if(!$result){
			
			return "<pre>".$consulta.mysqli_error($link). "</pre>";
		}
		
		$list = "<div class='list-group $class '>";
		
		while($fila = mysqli_fetch_assoc($result)){
			$list.= "<a href='#' data-id_registro='{$fila[$llave_primaria]}' class='list-group-item list-group-item-action py-1'>{$fila[$campo_etiqueta]}</a>";
			
			
		}	
		
		
		
		$list.="</div>>";
		
		return $list;
	}
	
?>