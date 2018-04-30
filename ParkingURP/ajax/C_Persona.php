<?php

require_once "../modelos/M_Persona.php";

$m_persona = new M_Persona();

$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$ape_paterno = isset($_POST["ape_paterno"])? limpiarCadena($_POST["ape_paterno"]):"";
$ape_materno = isset($_POST["ape_materno"])? limpiarCadena($_POST["ape_materno"]):"";
$celular = isset($_POST["celular"])? limpiarCadena($_POST["celular"]):"";
$correo = isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";
$id_tipo_persona = isset($_POST["id_tipo_persona"])? limpiarCadena($_POST["id_tipo_persona"]):"";
$id_carrera = isset($_POST["id_carrera"])? limpiarCadena($_POST["id_carrera"]):"";

switch ($_GET["op"]) {
	case 'guardaryeditar':
		if(empty($id_persona)){
			$rspta = $m_persona->insertar($codigo, $nombre, $ape_paterno, $ape_materno, $celular, $correo, $id_tipo_persona, $id_carrera);
			echo $rspta;
		}else{
			$rspta = $m_persona->editar($id_persona, $codigo, $nombre, $ape_paterno, $ape_materno, $celular, $correo, $id_tipo_persona, $id_carrera);
			echo $rspta ? "Persona actualizada" : "Persona no se pudo actualizar";
		}
		break;
	
	case 'mostrar':
		$rspta = $m_persona->mostrar($id_persona);
		//Codificar el resultado utilizando json
			echo json_encode($rspta);
		break;

	case 'listar':
		$rspta = $m_persona->listar();
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->codigo,
				"1" => $reg->nombre,
				"2" => $reg->ape_paterno,
				"3" => $reg->ape_materno,
				"4" => $reg->tipo_persona,
				"5" => $reg->placa,
				"6" => '<button class="btn btn-warning" onclick="mostrar('.$reg->id_persona.')"><i class="fa fa-pencil"></i></button>'
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