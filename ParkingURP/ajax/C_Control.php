<?php
require_once "../modelos/M_Control.php";
$m_control = new M_Control();
$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$flag_quedarse = isset($_POST["flag_quedarse"])? limpiarCadena($_POST["flag_quedarse"]):"";
$motivo = isset($_POST["motivo"])? limpiarCadena($_POST["motivo"]):"";


$fecha_entrada = isset($_POST["fecha_entrada"])? limpiarCadena($_POST["fecha_entrada"]):"";
$hora_entrada = isset($_POST["hora_entrada"])? limpiarCadena($_POST["hora_entrada"]):"";
$fecha_salida = isset($_POST["fecha_salida"])? limpiarCadena($_POST["fecha_salida"]):"";
$hora_salida = isset($_POST["hora_salida"])? limpiarCadena($_POST["hora_salida"]):"";
$id_control = isset($_POST["id_control"])? limpiarCadena($_POST["id_control"]):"";
$DNI = isset($_POST["DNI"])? limpiarCadena($_POST["DNI"]):"";
$respuesta = isset($_POST["respuesta"])? limpiarCadena($_POST["respuesta"]):"";

switch ($_GET["op"]) {
	case 'guardar':

		//$id_control = $m_control->insertar($flag_quedarse, $motivo, $id_persona);

		require_once "../modelos/M_Usuario.php";
		$m_usuario = new M_Usuario();

		$rspta3 = $m_usuario->cambiarEstado($codigo, "2");

		require_once "../modelos/M_Vehiculo.php";
		$m_vehiculo = new M_Vehiculo();

		$placa = isset($_POST["placa"])? limpiarCadena($_POST["placa"]):"";

		$rspta4 = $m_vehiculo->editarEstado($placa, "2");

		require_once "../modelos/M_Invitado.php";
		$m_invitado = new M_Invitado();

		require_once "../modelos/M_Invitado_X_Control.php";
		$m_invitado_x_control = new M_Invitado_X_Control();

		$id_control1 = $m_control->insertar('0', null, $codigo, $placa);

		if(isset($_POST['invitados'])){

			$dni_invitados = $_POST['invitados'];
			foreach($dni_invitados as $dni){
				$rspta2 = $m_invitado->insertar($dni);

				$rspta = $m_invitado_x_control->insertar($dni, $id_control1);
			}

		}
		break;

		case 'editar':
		
			$rspta = $m_control->editar($id_control, $fecha_salida.' '.$hora_salida);
			echo $rspta ? "Ha marcado salida exitosamente" : "No se pudo marcar la salida";
		
		break;

	case 'mostrar':

	$existe = $m_control->existeCompañia($id_control);

			if($existe["count"] == "0"){
				$rspta = $m_control->mostrarSinAcompañantes($id_control);
			}

			else{
				$rspta = $m_control->mostrar($id_control);
			}

		
		//Codificar el resultado utilizando json
			echo json_encode($rspta);
		break;


    case 'listar':
		$rspta = $m_control->listar();
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->fecha_entrada,
				"1" => $reg->hora_entrada,
				"2" => $reg->fecha_salida,
				"3" => $reg->hora_salida,
				"4" => (($reg->flag_quedarse=='1' ? '<span class="label bg-yellow">SOLICITADO</span>' : ($reg->flag_quedarse=='2' ? '<span class="label bg-green">ACEPTADO</span>': ($reg->flag_quedarse=='3' ? '<span class="label bg-red">RECHAZADO</span>':'<span class="label bg-blue">NO SOLICITADO</span>')))),
				"5" => $reg->codigo,
				"6" => $reg->placa,
				"7" => '<button class="btn btn-warning" onclick="mostrar('.$reg->id_control.')"><i class="fa fa-pencil"></i></button>'
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