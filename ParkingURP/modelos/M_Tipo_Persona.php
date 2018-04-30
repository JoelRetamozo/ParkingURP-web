<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Tipo_Persona{
	//Implementamos nuestro constructor
	public function __construct(){

	}

	//Implementar un metodo para listar los registros y mostrar en el select
	public function selectMovil(){
		$sql = "SELECT * FROM T_Tipo_Persona WHERE tipo_sistema = 'movil'";
		return ejecutarConsulta($sql);
	}

}

?>