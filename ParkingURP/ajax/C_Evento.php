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

	case 'buscar':
		//$rspta = $m_evento->buscar($id_evento);
		$rspta = $m_evento->buscar($id_evento);
		//Codificar el resultado utilizando json
			echo json_encode($rspta);
		break;

	case 'listar':
		$rspta = $m_evento->listar();
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->nombre,
				"1" => $reg->descripcion,
				"2" => $reg->fecha_inicio,
				"3" => $reg->fecha_fin,
				"4" => ($reg->estado=='1' ?'<button class="btn btn-primary" onclick="iniciarEvento('.$reg->id_evento.')"><i class="fa fa-check"></i> Iniciar</button>': ($reg->estado=='2' ? '<span class="label bg-yellow">En proceso</span><button class="btn btn-danger" onclick="finalizarEvento('.$reg->id_evento.')"><i class="fa fa-close"></i> Terminar</button>' : '<span class="label bg-green">Finalizado</span>' /*<button class="btn btn-info" onclick="verEvento('.$reg->id_evento.')"><i class="fa fa-search"></i> Ver</button>'*/))
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

		$id_area = $_POST["id_area"];

			//$rspta=$m_evento->insertar($nombre, $decripcion, $fecha_inicio, $fecha_fin, $estado);
			$id_evento_new= $m_evento->insertar($nombre, $decripcion, $fecInicio, $fecFin, '1');

			for ($i=0; $i < count($id_area); $i++) { 
				$rspta = $m_evento->insertarMuchosMuchos($id_area[$i], $id_evento_new);
			}

			echo $rspta ? "Evento registrado" : "Evento no se pudo registrar";

		break;

		case 'iniciarEvento':

			require_once "../modelos/M_Area.php";

			$m_area = new M_Area();

			$id_area = $_POST["id_area"];

			for ($i=0; $i < count($id_area); $i++) { 
				$rspta = $m_area->iniciarEvento($id_area[$i]);
			}

			$rspta1 = $m_evento->cambiarEstado($id_evento, '2');

			echo $rspta ? "Evento iniciado con exito" : "Evento no se pudo iniciar";
			break;

		case 'finalizarEvento':

			require_once "../modelos/M_Area.php";

			$m_area = new M_Area();

			$id_area = $_POST["id_area"];

			for ($i=0; $i < count($id_area); $i++) { 
				$rspta = $m_area->finalizarEvento($id_area[$i]);
			}

			$rspta1 = $m_evento->cambiarEstado($id_evento, '3');

			echo $rspta ? "Evento finalizado con exito" : "Evento no se pudo finalizar";
			break;

		case 'listarAreas':

		$rspta = $m_evento->listarAreas($id_evento);

		$final = "";

		foreach ($rspta as $r) {
			if ($final == "") {
				$final = $r["id_area"];
			}else{
				$final .= "," . $r["id_area"];
			}
		}

		echo $final;

			break;
		
}

?>
