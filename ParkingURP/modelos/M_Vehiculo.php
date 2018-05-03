<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Vehiculo{
	//Implementamos nuestro constructor
	public function __construct(){
	}
	//Implementamos un metodo para insertar registros
	public function insertar($placa, $modelo, $id_color, $id_marca_vehiculo, $id_tipo_vehiculo){
		$sql = "INSERT INTO T_Vehiculo(placa, modelo, id_color, id_marca_vehiculo, id_tipo_vehiculo) VALUES ('$placa', '$modelo', '$id_color', '$id_tipo_vehiculo', '$id_marca_vehiculo')";
		return ejecutarConsulta_retornarID($sql);
	}
	//Implementamos un metodo para editar registros
	public function editar($id_vehiculo, $placa, $modelo, $id_color, $id_marca_vehiculo, $id_tipo_vehiculo){
		$sql = "UPDATE T_Vehiculo SET placa = '$placa', modelo = '$modelo', id_color = '$id_color', id_marca_vehiculo = '$id_marca_vehiculo', id_tipo_vehiculo = '$id_tipo_vehiculo' WHERE id_vehiculo = '$id_vehiculo'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($id_persona){
		$sql = "SELECT * FROM T_Vehiculo v INNER JOIN t_persona_has_t_vehiculo pXv ON v.id_vehiculo = pXv.id_vehiculo INNER JOIN t_persona p ON p.id_persona = pXv.id_persona AND p.id_persona = '$id_persona'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function existePlaca($placa){
		$sql = "SELECT COUNT(*) AS count FROM T_Vehiculo WHERE placa = '$placa'";
		return ejecutarConsultaSimpleFila($sql);
	}
}
?>