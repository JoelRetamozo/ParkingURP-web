<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Seccion{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function ingresoDeVehiculo($junto){
		$sql = "UPDATE T_Seccion SET estado=1 WHERE nombre='$junto'";
		return ejecutarConsulta($sql);
	}
	public function salidaDeVehiculo($junto){
			$sql = "UPDATE T_Seccion SET estado=0 WHERE nombre='$junto'";
		return ejecutarConsulta($sql);
				
	}
	public function pedirEstacionamientosLlenos(){
		$sql = "SELECT nombre FROM T_Seccion WHERE estado=1";
	return ejecutarConsulta($sql);
	}

	public function vehiculoOcupado($junto){
		$sql = "SELECT COUNT(*) AS count FROM T_Seccion WHERE nombre = '$junto' AND estado=1";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function vehiculosOcupados(){
		$sql = "SELECT COUNT(*) AS count FROM T_Seccion WHERE estado=1";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function estacionamientoLibre(){
		$sql = "SELECT COUNT(*) AS count FROM T_Seccion WHERE estado=0";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>