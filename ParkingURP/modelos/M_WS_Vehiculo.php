<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_WS_Vehiculo{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function mostrarVehiculo($placa){
		$sql = "SELECT * FROM WS_Vehiculo WHERE placa = '$placa'";
		return ejecutarSimpleFila($sql);
	}

}

?>