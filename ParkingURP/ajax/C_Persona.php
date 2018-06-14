<?php

require_once "../modelos/M_Persona.php";

$m_persona = new M_Persona();

$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";

switch ($_GET["op"]) {

	case 'buscarByCodigo':
		$rspta = $m_persona->buscarByCodigo($codigo);
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
				"6" => '<button class="btn btn-warning" onclick="mostrar('.$reg->id_persona.')"><i class="fa fa-pencil"></i></button>',
				"7" => ($reg->estado)?'<button class="btn btn-danger" onclick="desactivar('.$reg->id_persona.')"><i class="fa fa-close"></i></button> <span class="label bg-green">Activado</span>': '<button class="btn btn-primary" onclick="activar('.$reg->id_persona.')"><i class="fa fa-check"></i></button> <span class="label bg-red">Desactivado</span>'
				);
		}
		$results = array(
			"sEcho" => 1, //Informacion para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data);
		echo json_encode($results);
		break;

	case 'registrarExcel':

		require_once "../modelos/M_Usuario.php";

		$m_usuario = new M_Usuario();

		if($_FILES['archivo']['error'] > 0){
			//$rspta = "Error: " . $_FILES['archivo']['error'];
		}else{

			move_uploaded_file($_FILES['archivo']['tmp_name'], '../files/Conductores/'.$_FILES['archivo']['name']);
		}
		$allinactive = $m_usuario->desactivarConductores();

		require_once '../public/Classes/PHPExcel/IOFactory.php';

		$objPHPExcel = PHPEXCEL_IOFactory::load('../files/Conductores/' . $_FILES['archivo']['name']);
		$objPHPExcel->setActiveSheetIndex(0);
		$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

		for ($i=2; $i <= $numRows ; $i++) { 
			$codigo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
			$nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
			$ape_paterno = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
			$ape_materno = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
			$correo = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
			$celular = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
			$tipo_persona = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
			$carrera = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();

			$existe = $m_persona->existeCodigo($codigo);

			if($existe["count"] == "0"){
				$rspta1 = $m_persona->insertar($codigo, $nombre, $ape_paterno, $ape_materno, $celular, $correo, $carrera, $tipo_persona);

				$rspta = $m_usuario->insertar($codigo, '', 'Conductor', $correo);
			}else{
				$rspta1 = $m_persona->editar($codigo, $nombre, $ape_paterno, $ape_materno, $celular, $correo, $carrera, $tipo_persona);

				$rspta = $m_usuario->activar($codigo);
			}
		}

		echo $rspta ? "Lista de conductores registrados exitosamente" : "Hubo un problema al registrar a los conductores";;

		break;

		case 'registrarInvitado':
			$existe = $m_persona->existeCodigo($codigo);

			$nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
			$ape_paterno = isset($_POST["ape_paterno"])? limpiarCadena($_POST["ape_paterno"]):"";
			$ape_materno = isset($_POST["ape_materno"])? limpiarCadena($_POST["ape_materno"]):"";

			if($existe["count"] == "0"){
				$rspta = $m_persona->insertar($codigo, $nombre, $ape_paterno, $ape_materno, null, null,null, 'Invitado');
			}
			break;

		case 'variable':
			# code...
			break;

}

?>