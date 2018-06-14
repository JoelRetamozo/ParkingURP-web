<?php

require_once "../modelos/M_Sugerencia.php";

$id_sugerencia = isset($_POST["id_sugerencia"])? limpiarCadena($_POST["id_sugerencia"]):"";

$m_sugerencia = new M_Sugerencia();

switch ($_GET["op"]) {

	case 'listar':
		$rspta = $m_sugerencia->listar();
		//Vamos a declarar un Array para almacenar todos los registros que voy  listar
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->codigo,
				"1" => $reg->nombre,
				"2" => $reg->ape_paterno,
				"3" => $reg->ape_materno,
				"4" => ($reg->estado == '1')?'<span class="img-sm bg-green btn-social-icon"><i class="glyphicon glyphicon-thumbs-up"></i></span>': '<span class="img-sm bg-red btn-social-icon"><i class="glyphicon glyphicon-thumbs-down"></i></span>',
				"5" => '<button class="btn btn-info" data-toggle="modal" data-target="#modal-sugerencia" onclick="mostrarSugerencia('.$reg->id_sugerencia.')"><i class="fa fa-search"></i></button>'
				);
		}
		$results = array(
			"sEcho" => 1, //Informacion para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data);
		echo json_encode($results);
		break;

	case 'buscarPorCodigo':
		$rspta = $m_sugerencia->buscarPorCodigo($id_sugerencia);
		$rspta["imagen"] = base64_encode($rspta["imagen"]);
		//echo '<img src="data:image/jpeg;base64,'.base64_encode($rspta["imagen"]).'"/>';
		echo json_encode($rspta);
		break;

}

?>