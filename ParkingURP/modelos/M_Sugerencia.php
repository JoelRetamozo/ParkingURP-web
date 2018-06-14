<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Sugerencia{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function listar(){
		$sql = "SELECT s.id_sugerencia, p.codigo, p.nombre, p.ape_paterno, p.ape_materno, s.estado FROM T_Sugerencia s INNER JOIN T_Usuario u ON s.codigo = u.codigo INNER JOIN T_Persona p ON u.codigo = p.codigo ORDER BY s.id_sugerencia DESC";
		return ejecutarConsulta($sql);
	}

	public function buscarPorCodigo($id_sugerencia){
		$sql = "SELECT p.codigo, p.nombre, p.ape_paterno, p.ape_materno, s.estado, s.detalle, s.imagen FROM T_Sugerencia s INNER JOIN T_Usuario u ON s.codigo = u.codigo AND s.id_sugerencia = '$id_sugerencia' INNER JOIN T_Persona p ON u.codigo = p.codigo";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>