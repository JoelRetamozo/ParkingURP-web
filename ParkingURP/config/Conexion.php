<?php 

//Se usa "require_once" para indicar que si el archivo ya esta incluido, no incluirlo otra vez
require_once "global.php";

$conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');

//Si tenemos un posible error en la conexion lo mostramos
if(mysqli_connect_errno()){
	printf("Fallo conexion a la base de datos: %s\n",mysqli_connect_errno());
	exit();
}

if(!function_exists('ejecutarConsulta')){

	function ejecutarConsulta($sql){
		global $conexion;
		$query = $conexion->query($sql);
		return $query;
	}

	function ejecutarConsultaSimpleFila($sql){
		global $conexion;
		$query = $conexion->query($sql);
		$row = $query->fetch_assoc();
		return $row;
	}

	function ejecutarConsulta_retornarID($sql){
		global $conexion;
		$query = $conexion->query($sql);
		return $conexion->insert_id;
	}

	function limpiarCadena($str){
		global $conexion;
		$str = mysqli_real_escape_string($conexion, trim($str));
		return htmlspecialchars($str);
	}
}

?>