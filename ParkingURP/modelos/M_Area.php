<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Area{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function totalPorArea($idArea){
		$sql = "SELECT count(*) AS count FROM t_seccion WHERE id_area = '$idArea'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function contarNumeroDeEspaciosOcupadosPorArea($id_area){
		$sql = "SELECT count(*) AS count FROM `t_area` as ta INNER JOIN `t_seccion` as ts WHERE ta.id_area=ts.id_area AND ts.id_area='$id_area' AND ts.estado=1";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function actualizarEspacioArea($id_area,$espacio){
			$sql = "UPDATE t_area SET espacio=$espacio WHERE id_area = '$id_area'";
		return ejecutarConsulta($sql);
				
	}

	public function listar(){
		$sql = "SELECT * FROM T_Area";
		return ejecutarConsulta($sql);
	}

	public function iniciarEvento($id_area){
		$sql = "UPDATE T_Area a JOIN T_Seccion s ON a.id_area = s.id_area AND a.id_area = '$id_area' SET a.espacio = '0', a.estado = '1', s.estado = '1'";
		return ejecutarConsulta($sql);
	}

	public function finalizarEvento($id_area){
		$sql = "UPDATE T_Area a JOIN T_Seccion s ON a.id_area = s.id_area AND a.id_area = '$id_area' SET a.espacio = a.total, a.estado = '0', s.estado = '0'";
		return ejecutarConsulta($sql);
	}

}

?>