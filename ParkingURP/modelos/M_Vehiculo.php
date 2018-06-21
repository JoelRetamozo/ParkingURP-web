<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Vehiculo{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function insertar($placa, $descripcion, $estado, $tipo_vehiculo){
		$sql = "INSERT INTO T_Vehiculo(placa, descripcion, estado, tipo_vehiculo) VALUES('$placa', '$descripcion', '$estado', '$tipo_vehiculo')";
		return ejecutarConsulta($sql);
	}

	public function eliminar($placa){
		$sql = "UPDATE T_Vehiculo SET estado = '0' WHERE placa = '$placa'";
		return ejecutarConsulta($sql);
	}

	public function reactivar($placa){
		$sql = "UPDATE T_Vehiculo SET estado = '1' WHERE placa = '$placa'";
		return ejecutarConsulta($sql);
	}

	public function existePlaca($placa){
		$sql = "SELECT COUNT(*) AS count FROM T_Vehiculo WHERE placa = '$placa'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function buscarVehiculo($codigo, $tipo_vehiculo){
		$sql = "SELECT v.placa, v.descripcion, v.estado FROM T_Vehiculo v INNER JOIN T_Persona_has_T_Vehiculo pXv ON pXv.placa = v.placa AND v.tipo_vehiculo = '$tipo_vehiculo' INNER JOIN T_Persona p ON pXv.codigo = p.codigo AND p.codigo = '$codigo' AND pXv.estado != '0'";
		return ejecutarConsulta($sql);
	}

	public function mostrarBici($placa, $codigo){
		$sql = "SELECT v.descripcion, v.estado FROM T_Vehiculo v INNER JOIN t_persona_has_t_vehiculo pXv ON pXv.placa = v.placa AND pXv.codigo = '$codigo' AND v.placa = '$placa' AND v.estado != '2'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function editarEstado($placa, $estado){
		$sql = "UPDATE T_Vehiculo SET estado = '$estado' WHERE placa = '$placa'";
		return ejecutarConsulta($sql);
	}

	public function existeVehiculoByCodigo($codigo, $placa){
		$sql = "SELECT v.tipo_vehiculo, v.estado FROM T_Vehiculo v INNER JOIN t_persona_has_t_vehiculo pXv ON pXv.placa = v.placa AND pXv.codigo = '$codigo' AND v.placa = '$placa'";
		return ejecutarConsultaSimpleFila($sql);
	}
}
?>