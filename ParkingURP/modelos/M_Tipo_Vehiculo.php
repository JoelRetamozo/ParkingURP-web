<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Tipo_Vehiculo{
	//Implementamos nuestro constructor
	public function __construct(){

	}

	//Implementar un metodo para listar los registros y mostrar en el select
	public function select(){
		$sql = "SELECT * FROM T_Tipo_Vehiculo";
		return ejecutarConsulta($sql);
	}

}

?>