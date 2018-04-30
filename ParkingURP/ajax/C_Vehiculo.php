<?php

require_once "../modelos/M_Vehiculo.php";

$m_vehiculo = new M_Vehiculo();

$id_vehiculo = isset($_POST["id_vehiculo"])? limpiarCadena($_POST["id_vehiculo"]):"";
$placa = isset($_POST["placa"])? limpiarCadena($_POST["placa"]):"";
$modelo = isset($_POST["modelo"])? limpiarCadena($_POST["modelo"]):"";
$id_color = isset($_POST["id_color"])? limpiarCadena($_POST["id_color"]):"";
$id_tipo_vehiculo = isset($_POST["id_tipo_vehiculo"])? limpiarCadena($_POST["id_tipo_vehiculo"]):"";

switch ($_GET["op"]) {
	case 'guardaryeditar':
		if(empty($id_vehiculo)){
			$rspta = $m_vehiculo->insertar($placa, $modelo, $id_color, $id_tipo_vehiculo);
			echo $rspta;
		}else{
			$rspta = $m_vehiculo->editar($id_vehiculo, $placa, $modelo, $id_color, $id_tipo_vehiculo);
			echo $rspta ? "Vehiculo actualizado" : "Vehiculo no se pudo actualizar";
		}
		break;
}

?>