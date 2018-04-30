<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Persona{
	//Implementamos nuestro constructor
	public function __construct(){

	}

	//Implementamos un metodo para insertar registros
	public function insertar($codigo, $nombre, $ape_paterno, $ape_materno, $celular, $correo, $id_tipo_persona, $id_carrera){
		$sql = "INSERT INTO T_Persona(codigo, nombre, ape_paterno, ape_materno, celular, correo, id_tipo_persona, id_carrera) VALUES ('$codigo', '$nombre', '$ape_paterno', '$ape_materno', '$celular', '$correo', '$id_tipo_persona', '$id_carrera')";

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
		$sql = "SELECT p.id_persona, p.codigo, p.nombre, p.ape_paterno, p.ape_materno, tp.nombre as tipo_persona, v.placa FROM T_Persona p INNER JOIN T_Tipo_Persona tp ON p.id_tipo_persona = tp.id_tipo_persona INNER JOIN T_Persona_has_T_Vehiculo pxv ON p.id_persona = pxv.id_persona INNER JOIN T_Vehiculo v ON v.id_vehiculo = pxv.id_vehiculo";
		return ejecutarConsulta($sql);
	}
}

?>