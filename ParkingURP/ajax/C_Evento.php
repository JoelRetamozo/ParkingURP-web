<?php

require_once "../modelos/M_Evento.php";

$m_evento = new M_Evento();

$id_evento = isset($_POST["id_evento"])? limpiarCadena($_POST["id_evento"]):"";
$nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$decripcion = isset($_POST["decripcion"])? limpiarCadena($_POST["decripcion"]):"";
$fecInicio = isset($_POST["fecInicio"])? limpiarCadena($_POST["fecInicio"]):"";
$fecFin = isset($_POST["fecFin"])? limpiarCadena($_POST["fecFin"]):"";



switch ($_GET["op"]) {



	case 'buscarByCodigo':
		$rspta = $m_evento->buscarByCodigo($id_evento);
		//Codificar el resultado utilizando json
			echo json_encode($rspta);
		break;

	case 'listar':
		$rspta = $m_evento->listar();
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->id_evento,
				"1" => $reg->nombre,
				"2" => $reg->decripcion,
				"3" => $reg->fecha_inicio,
				"4" => $reg->fecha_fin,
				"5" => ($reg->estado)?'<button class="btn btn-primary" onclick="desactivar('.$reg->id_evento.')"><i class="fa fa-check"></i></button> <span class="label bg-green">Registrado</span>': '<button class="btn btn-primary" onclick="activar('.$reg->id_evento.')"><i class="fa fa-check"></i></button> <span class="label bg-red">A cabo</span>' 
				);
		}
		$results = array(
			"sEcho" => 1, //Informacion para el datatables
			"iTotalRecords" => count($data), //enviamos() el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data);
		echo json_encode($results);
		break;

		case 'insertar':

			//$rspta=$m_evento->insertar($nombre, $decripcion, $fecha_inicio, $fecha_fin, $estado);
			$rspta=$m_evento->insertar($nombre, $decripcion, $fecInicio, $fecFin, '1');
			echo $rspta ? "Evento registrado" : "Evento no se pudo registrar";

			

		break;

		
}

?>
