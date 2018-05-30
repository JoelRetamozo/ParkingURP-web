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
}

?>