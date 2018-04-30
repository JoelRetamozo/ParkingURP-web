<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Color{
	//Implementamos nuestro constructor
	public function __construct(){

	}

	//Implementar un metodo para listar los registros y mostrar en el select
	public function select(){
		$sql = "SELECT * FROM T_Color";
		return ejecutarConsulta($sql);
	}

}

?>