<?php
require_once "../modelos/M_Vehiculo.php";
$m_vehiculo = new M_Vehiculo();
$placa = isset($_POST["placa"])? limpiarCadena($_POST["placa"]):"";
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
		}else{
			$rspta = $m_vehiculo->reactivar($placa);
		}

		require_once "../modelos/M_Persona_X_Vehiculo.php";

		$m_persona_x_vehiculo = new M_Persona_X_Vehiculo();

		$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";

		$rspta2 = $m_persona_x_vehiculo->insertar($codigo, $placa);

		if($rspta2){
			echo $tipo_vehiculo . " ha sido registrado exitosamente";
		}else{
			$rspta7 = $m_persona_x_vehiculo->reactivar($codigo, $placa);
			echo $tipo_vehiculo . " ya está registrado";
		}

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
				"1" => ($reg->estado == '1')?'<span class="label bg-green">Disponible</span>': '<span class="label bg-red">Ingresó</span>',
				"2" => '<button class="btn btn-danger" onclick="desactivar('."'".$reg->placa."', ".$codigo.')"><i class="fa fa-close"></i></button>'
				);
		}
		$results = array(
			"sEcho" => 1, //Informacion para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data);
		echo json_encode($results);
		break;

	case 'listarBicicleta':
		$codigo = isset($_GET["codigo"])? limpiarCadena($_GET["codigo"]):"";

		$rspta = $m_vehiculo->buscarVehiculo($codigo, 'Bicicleta');
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$descrip = explode(';', $reg->descripcion);
			$data[] = array(
				"0" => $descrip[0],
				"1" => $descrip[1],
				"2" => ($reg->estado == '1')?'<span class="label bg-green">Disponible</span>': '<span class="label bg-red">Ingresó</span>',
				"3" => '<button class="btn btn-danger" onclick="desactivar('."'".$reg->placa."', ".$codigo.')"><i class="fa fa-close"></i></button>'
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
		//$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
			//$rspta = $m_vehiculo->mostrarBici($placa, $codigo);
	$rspta = $m_vehiculo->mostrarBici('BICOGG722', '70654321');
			echo json_encode($rspta);
		break;

	case 'eliminarVehiculo':
		require_once "../modelos/M_Persona_X_Vehiculo.php";

		$m_persona_x_vehiculo = new M_Persona_X_Vehiculo();

		$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";

		$existeVarios = $m_persona_x_vehiculo->existeVarios($placa);

		if($existeVarios["count"] == "0" || $existeVarios["count"] == "1"){
			$rspta = $m_persona_x_vehiculo->eliminar($codigo, $placa);
			$rspta2 = $m_vehiculo->eliminar($placa);
		}else{
			$rspta = $m_persona_x_vehiculo->eliminar($codigo, $placa);
		}

		echo $rspta ? "El vehiculo ha sido eliminado" : "El vehiculo no se pudo eliminar";
		break;

	case 'existeVehiculoByCodigo':

	$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
	$rspta = $m_vehiculo->existeVehiculoByCodigo($codigo, $placa);
	echo json_encode($rspta);
		break;
}
?>