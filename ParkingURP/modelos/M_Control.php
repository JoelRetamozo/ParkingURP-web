<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Control{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function insertar($flag_quedarse, $motivo, $id_persona){
		$sql = "INSERT INTO T_Control(flag_quedarse, motivo, id_persona) VALUES('$flag_quedarse', '$motivo', '$id_persona')";
		return ejecutarConsulta_retornarID($sql);
	}

}

?>