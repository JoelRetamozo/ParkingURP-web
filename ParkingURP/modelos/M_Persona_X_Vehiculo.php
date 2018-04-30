<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Persona_X_Vehiculo{
	//Implementamos nuestro constructor
	public function __construct(){

	}

	public function insertar($id_persona, $id_vehiculo){
		$sql = "INSERT INTO T_Persona_has_T_Vehiculo VALUES ('$id_persona', '$id_vehiculo')";

		return ejecutarConsulta($sql);
	}

}

?>