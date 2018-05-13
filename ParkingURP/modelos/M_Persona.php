<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Persona{
	//Implementamos nuestro constructor
	public function __construct(){

	}

	//Implementamos un metodo para insertar registros
	public function insertar($codigo, $nombre, $ape_paterno, $ape_materno, $celular, $correo, $carrera, $tipo_persona){
		$sql = "INSERT INTO T_Persona(codigo, nombre, ape_paterno, ape_materno, celular, correo, carrera, tipo_persona) VALUES ('$codigo', '$nombre', '$ape_paterno', '$ape_materno', '$celular', '$correo', '$carrera', '$tipo_persona')";

		return ejecutarConsulta_retornarID($sql);
	}

	//Implementamos un metodo para editar registros
	public function editar($id_persona, $codigo, $nombre, $ape_paterno, $ape_materno, $celular, $correo, $id_tipo_persona, $id_carrera){
		$sql = "UPDATE T_Persona SET codigo = '$codigo', nombre = '$nombre', ape_paterno = '$ape_paterno', ape_materno = '$ape_materno', celular = '$celular', correo = '$correo', id_tipo_persona = '$id_tipo_persona', id_carrera = '$id_carrera' WHERE id_persona = '$id_persona'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un metodo para mostrar los datos de un registro o modificar
	public function mostrar($id_persona){
		$sql = "SELECT * FROM T_Persona WHERE id_persona = '$id_persona'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un metodo para listar los registros
	public function listar(){
		$sql = "SELECT p.id_persona, p.codigo, p.nombre, p.ape_paterno, p.ape_materno, tp.nombre as tipo_persona, v.placa, u.estado FROM T_Persona p INNER JOIN T_Tipo_Persona tp ON p.id_tipo_persona = tp.id_tipo_persona INNER JOIN T_Persona_has_T_Vehiculo pxv ON p.id_persona = pxv.id_persona INNER JOIN T_Vehiculo v ON v.id_vehiculo = pxv.id_vehiculo INNER JOIN T_Usuario u ON u.id_persona = p.id_persona";
		return ejecutarConsulta($sql);
	}

	public function listarSinVehiculo(){
		$sql = "SELECT p.id_persona, p.codigo, p.nombre, p.ape_paterno, p.ape_materno, tp.nombre as tipo_persona FROM T_Persona p INNER JOIN T_Tipo_Persona tp ON p.id_tipo_persona = tp.id_tipo_persona AND (SELECT COUNT(id_persona) FROM t_persona_has_t_vehiculo WHERE id_persona = p.id_persona) = 0";
		return ejecutarConsulta($sql);
	}

	public function existeCodigo($codigo){
		$sql = "SELECT COUNT(*) AS count FROM T_Persona WHERE codigo = '$codigo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function buscarByCodigo($codigo){
		$sql = "SELECT * FROM T_Persona WHERE codigo = '$codigo'";
		return ejecutarConsultaSimpleFila($sql);
	}
}

?>