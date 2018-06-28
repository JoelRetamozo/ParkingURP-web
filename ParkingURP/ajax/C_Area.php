<?php
require_once "../modelos/M_Area.php";
$m_area = new M_Area();
$id_area = isset($_POST["id_area"])? limpiarCadena($_POST["id_area"]):"";
$espacio = isset($_POST["espacio"])? limpiarCadena($_POST["espacio"]):"";

switch ($_GET["op"]) {
	
	case 'contarNumeroDeEspaciosOcupadosPorArea':
		$rspta= $m_area->contarNumeroDeEspaciosOcupadosPorArea($id_area);
		break;

	case 'totalPorArea':
		$rspta= $m_seccion->totalPorArea($id_area);
		echo json_encode($rspta);
		break;

    case 'restar':
		$rspta= $m_area->contarNumeroDeEspaciosOcupadosPorArea($id_area);
		//echo ($rspta["count"]);
		$rspta2=$m_area->totalPorArea($id_area);
		//echo ($rspta2["count"]);
		//echo "el valor de restar "+$rspta["count"]+" menos "+$rspta2["count"]+" es:"+($rspta2["count"]-$rspta["count"]);
		echo $rspta2["count"]-$rspta["count"];
		break;
	case 'actualizarEspacioArea':
		$rspta= $m_area->actualizarEspacioArea($id_area,$espacio);
		break;

	case 'selectArea':

			$rspta = $m_area->listar();

			while ($reg = $rspta->fetch_object()) {
				echo '<option value="' . $reg->id_area . '">' . $reg->nombre . '</option>';
			}
			break;
}
?>