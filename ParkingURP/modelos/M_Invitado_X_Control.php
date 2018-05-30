<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Invitado_X_Control{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function insertar($dni, $id_control){
		$sql = "INSERT INTO T_Invitado_has_T_Control(id_control, DNI) VALUES('$id_control', '$dni')";
		return ejecutarConsulta($sql);
	}

}

?>