<?php
	function Conectarse()
	{
		$host="localhost";
		if($_SERVER["SERVER_NAME"] == "localhost"){
			$db="calificaciones";
			$usuario="sistemas";
			$pass="Glifom3dia";
		}
		else{
			$db="centrocf_calificaciones";
			$usuario="centrocf_admin";
			$pass="Cfac@2020";
		}
		date_default_timezone_set('America/Mexico_City');
		setlocale(LC_ALL,"es_MX"); 
		setlocale(LC_NUMERIC, 'en_US'); 
		if (!($link=mysqli_connect($host,$usuario,$pass)))
		{
			die( "Error conectando a la base de datos.". mysqli_error($link));
		}
		if (!mysqli_select_db($link, $db))
		{
			die( "Error seleccionando la base de datos.". mysqli_error($link));
		}
		
		if($_SERVER["SERVER_NAME"] != "localhost"){
			mysqli_query($link, "SET CHARACTER SET utf8") or die("Error en charset UTF8".mysqli_error($link));
		}
		
		mysqli_query($link, "SET GLOBAL sql_mode = ''");
		mysqli_query($link, "SET SESSION sql_mode = ''");
		
		return $link;
	}
?>