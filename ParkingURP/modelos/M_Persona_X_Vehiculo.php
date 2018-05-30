<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Persona_X_Vehiculo{
	//Implementamos nuestro constructor
	public function __construct(){

	}

	public function insertar($codigo, $placa){
		$sql = "INSERT INTO T_Persona_has_T_Vehiculo VALUES ('$codigo', '$placa')";

		return ejecutarConsulta($sql);
	}

	public function eliminar($codigo, $placa){
		$sql = "DELETE FROM T_Persona_has_T_Vehiculo WHERE placa = '$placa' AND codigo = '$codigo'";

		return ejecutarConsulta($sql);
	}

	public function existeVarios($placa){
		$sql = "SELECT COUNT(v.placa) as count FROM t_vehiculo v INNER JOIN t_persona_has_t_vehiculo pXv ON v.placa = pXv.placa AND v.placa = '$placa'";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>