<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Invitado{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function insertar($dni){
		$sql = "INSERT INTO T_Invitado VALUES('$dni')";
		return ejecutarConsulta($sql);
	}

}

?>