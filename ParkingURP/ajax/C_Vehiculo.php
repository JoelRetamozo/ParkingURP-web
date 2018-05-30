<?php
require_once "../modelos/M_Vehiculo.php";
$m_vehiculo = new M_Vehiculo();
$placa = isset($_REQUEST["placa"])? limpiarCadena($_REQUEST["placa"]):"";
$marca = isset($_POST["marca"])? limpiarCadena($_POST["marca"]):"";
$color = isset($_POST["color"])? limpiarCadena($_POST["color"]):"";
$tipo_vehiculo = isset($_REQUEST["tipo_vehiculo"])? limpiarCadena($_REQUEST["tipo_vehiculo"]):"";

switch ($_GET["op"]) {
	case 'registrar':
		$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";

		$existe = $m_vehiculo->existePlaca($placa);

		if($existe["count"] == "0"){
			if($tipo_vehiculo == 'Bicicleta'){
				$descripcion = $marca.";".$color;
				$rspta = $m_vehiculo->insertar($placa, $descripcion, "1", $tipo_vehiculo);
			}else{
				$rspta = $m_vehiculo->insertar($placa, "", "1", $tipo_vehiculo);
			}
		}

		require_once "../modelos/M_Persona_X_Vehiculo.php";

		$m_persona_x_vehiculo = new M_Persona_X_Vehiculo();

		$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";

		$rspta2 = $m_persona_x_vehiculo->insertar($codigo, $placa);

		echo $rspta2 ? $tipo_vehiculo . " ha sido registrado" : $tipo_vehiculo . " ya esta registrado";
		break;

	case 'existePlaca':
			$rspta = $m_vehiculo->existePlaca($placa);
			echo json_encode($rspta);
		break;

	case 'listarVehiculo':
		$codigo = isset($_GET["codigo"])? limpiarCadena($_GET["codigo"]):"";

		$rspta = $m_vehiculo->buscarVehiculo($codigo, $tipo_vehiculo);
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->placa,
				"1" => '<button class="btn btn-danger" onclick="desactivar('."'".$reg->placa."', ".$codigo.')"><i class="fa fa-close"></i></button>',
				"2" => '<button class="btn btn-success" data-toggle="modal" data-target="#modal-default" onclick="datosVehiculo('."'".$reg->placa."', ".$codigo.')"><i class="fa fa-pencil"></i> Ingreso</button>'
				);
		}
		$results = array(
			"sEcho" => 1, //Informacion para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data);
		echo json_encode($results);
		break;

	case 'mostrarBici':
		$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
			$rspta = $m_vehiculo->mostrarBici($placa, $codigo);
			echo json_encode($rspta);
		break;

	case 'eliminarVehiculo':
		require_once "../modelos/M_Persona_X_Vehiculo.php";

		$m_persona_x_vehiculo = new M_Persona_X_Vehiculo();

		$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";

		$rspta = $m_persona_x_vehiculo->eliminar($codigo, $placa);

		$existeVarios = $m_persona_x_vehiculo->existeVarios($placa);

		if($existeVarios["count"] == "0" || $existeVarios["count"] == "1"){
			$rspta2 = $m_vehiculo->eliminar($placa);
		}

		echo $rspta ? "El vehiculo ha sido eliminado" : "El vehiculo no se pudo eliminar";
		break;

	case 'pruebaEliminar':
	require_once "../modelos/M_Persona_X_Vehiculo.php";

		$m_persona_x_vehiculo = new M_Persona_X_Vehiculo();
		$existe = $m_persona_x_vehiculo->existeVarios($placa);
		echo $existe["count"];
		break;
}
?>