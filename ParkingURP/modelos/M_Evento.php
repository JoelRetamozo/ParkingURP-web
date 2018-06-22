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

	public function insertar( $nombre, $decripcion, $fecha_inicio, $fecha_fin, $estado){
		$sql = "INSERT INTO t_evento(nombre, decripcion, fecha_inicio, fecha_fin, estado) 
		VALUES  ('$nombre', '$decripcion', '$fecha_inicio', '$fecha_fin', '1')";

	

		return ejecutarConsulta($sql);
	}

		public function cambiar($id_evento){
		$sql = "UPDATE T_Evento SET estado = '2' WHERE id_evento = '$id_evento'";
		return ejecutarConsulta($sql);
	}

}

?>
