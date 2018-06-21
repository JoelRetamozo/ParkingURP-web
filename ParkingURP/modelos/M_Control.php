<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Control{
	//Implementamos nuestro constructor
	public function __construct(){
	}

	public function insertar($flag_quedarse, $motivo, $codigo, $placa){
		$sql = "INSERT INTO T_Control(flag_quedarse, motivo, codigo, placa) VALUES('$flag_quedarse', '$motivo', '$codigo', '$placa')";
		return ejecutarConsulta_retornarID($sql);
	}

	public function editar($id_control, $salida){
		$sql = "UPDATE T_Control SET salida = now() WHERE id_control = '$id_control'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($id_control){
		$sql = "SELECT c.id_control, DATE(c.entrada) as fecha_entrada ,TIME(c.entrada) as hora_entrada, DATE(c.salida) as fecha_salida, TIME(c.salida) as hora_salida, CONCAT(p.codigo,' ',p.nombre,' ',p.ape_paterno,' ',p.ape_materno) as codigo, c.flag_quedarse, c.motivo, c.respuesta,p.tipo_persona, phv.placa, v.tipo_vehiculo, GROUP_CONCAT(ihc.DNI) as DNI FROM T_Persona p INNER JOIN T_Persona_has_T_Vehiculo phv ON p.codigo=phv.codigo INNER JOIN T_Vehiculo v ON phv.placa=v.placa INNER JOIN T_Control c ON p.codigo=c.codigo INNER JOIN T_Invitado_has_T_Control ihc ON c.id_control=ihc.id_control WHERE c.id_control = '$id_control'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function mostrarSinAcompañantes($id_control){
		$sql = "SELECT c.id_control, DATE(c.entrada) as fecha_entrada ,TIME(c.entrada) as hora_entrada, DATE(c.salida) as fecha_salida, TIME(c.salida) as hora_salida, CONCAT(p.codigo,' ',p.nombre,' ',p.ape_paterno,' ',p.ape_materno) as codigo, c.flag_quedarse, c.motivo, c.respuesta,p.tipo_persona, phv.placa, v.tipo_vehiculo FROM T_Persona p INNER JOIN T_Persona_has_T_Vehiculo phv ON p.codigo=phv.codigo INNER JOIN T_Vehiculo v ON phv.placa=v.placa INNER JOIN T_Control c ON p.codigo=c.codigo WHERE c.id_control = '$id_control'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar(){

		$sql="SELECT c.id_control, DATE(c.entrada) as fecha_entrada ,TIME(c.entrada) as hora_entrada, DATE(c.salida) as fecha_salida, TIME(c.salida) as hora_salida, c.flag_quedarse, p.codigo, v.placa FROM T_Control c INNER JOIN T_Persona_has_T_Vehiculo thv ON c.placa=thv.placa AND c.codigo=thv.codigo INNER JOIN T_Persona p ON thv.codigo=p.codigo INNER JOIN T_Vehiculo v ON v.placa=thv.placa AND DATE(c.entrada)=DATE(curdate()) ORDER BY entrada DESC" ;
        return ejecutarConsulta($sql); 
	}


	public function existeCompañia($id_control){
		$sql = "SELECT COUNT(*) AS count FROM t_invitado_has_t_control WHERE id_control = '$id_control'";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>