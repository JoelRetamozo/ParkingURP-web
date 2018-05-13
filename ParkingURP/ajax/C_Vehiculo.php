<?php
require_once "../modelos/M_Vehiculo.php";
$m_vehiculo = new M_Vehiculo();
$id_vehiculo = isset($_POST["id_vehiculo"])? limpiarCadena($_POST["id_vehiculo"]):"";
$placa = isset($_POST["placa"])? limpiarCadena($_POST["placa"]):"";
$modelo = isset($_POST["modelo"])? limpiarCadena($_POST["modelo"]):"";
$id_color = isset($_POST["id_color"])? limpiarCadena($_POST["id_color"]):"";
$id_marca_vehiculo = isset($_POST["id_marca_vehiculo"])? limpiarCadena($_POST["id_marca_vehiculo"]):"";
$id_tipo_vehiculo = isset($_POST["id_tipo_vehiculo"])? limpiarCadena($_POST["id_tipo_vehiculo"]):"";

switch ($_GET["op"]) {
	case 'guardaryeditar':
		if(empty($id_vehiculo)){
			$rspta = $m_vehiculo->insertar($placa, $modelo, $id_color, $id_marca_vehiculo, $id_tipo_vehiculo);
			echo $rspta;
		}else{
			$rspta = $m_vehiculo->editar($id_vehiculo, $placa, $modelo, $id_color, $id_marca_vehiculo, $id_tipo_vehiculo);
			echo $rspta ? "Vehiculo actualizado" : "Vehiculo no se pudo actualizar";
		}
		break;

	case 'mostrar':
	$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
		$rspta = $m_vehiculo->mostrar($id_persona);
		//Codificar el resultado utilizando json
			echo json_encode($rspta);
		break;

	case 'existePlaca':
			$rspta = $m_vehiculo->existePlaca($placa);
			echo json_encode($rspta);
		break;

	case 'listarVehiculo':
		$codigo = isset($_REQUEST["codigo"])? limpiarCadena($_REQUEST["codigo"]):"";
		$tipo_vehiculo = isset($_REQUEST["tipo_vehiculo"])? limpiarCadena($_REQUEST["tipo_vehiculo"]):"";

			$rspta = $m_vehiculo->buscarVehiculo($codigo, $tipo_vehiculo);
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->placa,
				"1" => ($reg->estado == 0)?'<button class="btn btn-primary" onclick="activar('.$reg->id_vehiculo.')"><i class="fa fa-check"></i></button>': '<span class="label bg-green">Activado</span>',
				"2" => '<button class="btn btn-success" onclick="ingreso('.$reg->id_vehiculo.')"><i class="fa fa-pencil"></i> Ingreso</button>'
				);
		}
		$results = array(
			"sEcho" => 1, //Informacion para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data);
		echo json_encode($results);
		break;
}
?>