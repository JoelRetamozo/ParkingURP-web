<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Evento{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function listar(){
		$sql = "SELECT * FROM `t_evento`";
		return ejecutarConsulta($sql);
	}	

	public function buscarByCodigo($id_evento){
		$sql = "SELECT * FROM t_evento WHERE nombre= '$nombre'";
		return ejecutarConsultaSimpleFila($sql);
	}	

	public function buscar($id_evento){
		$sql = "SELECT * FROM t_evento WHERE id_evento= '$id_evento'";
		return ejecutarConsultaSimpleFila($sql);
	}	

	public function insertar( $nombre, $decripcion, $fecha_inicio, $fecha_fin, $estado){
		$sql = "INSERT INTO t_evento(nombre, descripcion, fecha_inicio, fecha_fin, estado) 
		VALUES  ('$nombre', '$decripcion', '$fecha_inicio', '$fecha_fin', '1')";
		return ejecutarConsulta_retornarID($sql);
	}

	public function insertarMuchosMuchos($id_area, $id_evento){
		$sql = "INSERT INTO t_area_has_t_evento VALUES  ('$id_area', '$id_evento')";
		return ejecutarConsulta($sql);
	}

		public function cambiarEstado($id_evento, $estado){
		$sql = "UPDATE T_Evento SET estado = '$estado' WHERE id_evento = '$id_evento'";
		return ejecutarConsulta($sql);
	}

	public function listarAreas($id_evento){
		$sql = "SELECT a.id_area FROM T_Area a INNER JOIN t_area_has_t_evento aXe ON a.id_area = aXe.id_area INNER JOIN t_evento e ON aXe.id_evento = e.id_evento AND e.id_evento= '$id_evento'";
		return ejecutarConsulta($sql);
	}

}

?>
