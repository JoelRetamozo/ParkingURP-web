<?php
require_once "../modelos/M_Seccion.php";
$m_seccion = new M_Seccion();
$junto=isset($_POST["junto"])? limpiarCadena($_POST["junto"]):"";
//$junto=$_POST["junto"];
	
/*$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$flag_quedarse = isset($_POST["flag_quedarse"])? limpiarCadena($_POST["flag_quedarse"]):"";
$motivo = isset($_POST["motivo"])? limpiarCadena($_POST["motivo"]):"";
*/
switch ($_GET["op"]) {

case 'vehiculoOcupado':
		//$id_control = $m_control->insertar($flag_quedarse, $motivo, $id_persona);
		$rspta= $m_seccion->vehiculoOcupado($junto);
		echo json_encode($rspta);
		break;

case 'vehiculosOcupados':
		//$id_control = $m_control->insertar($flag_quedarse, $motivo, $id_persona);
		$rspta= $m_seccion->vehiculosOcupados();
		echo json_encode($rspta);
		break;


case 'actualizarEstadoEntrada':
		//$id_control = $m_control->insertar($flag_quedarse, $motivo, $id_persona);
		$rspta= $m_seccion->ingresoDeVehiculo($junto);
		echo $rspta ? "Se cambio el estado de ".$junto : "no se logro modificar".$junto;
		//echo json_encode($rspta);
		break;


case 'actualizarEstadoSalida':
if($junto=="0"){
echo "No hay mas vehiculos por sacar";
}
else{
	$rspta= $m_seccion->salidaDeVehiculo($junto);
		echo $rspta ? "Se cambio el estado de ".$junto : "no se logro modificar".$junto;
}
		break;


case 'pedirEstacionamientosLlenos':
		$rspta= $m_seccion->pedirEstacionamientosLlenos();
		while ($reg = $rspta->fetch_object()) {
		$data[]=array("nombre"=>$reg->nombre);
	}
		echo json_encode($data);
		break;

	case 'existeEstacionamientoLibre':
	$rspta= $m_seccion->estacionamientoLibre();
		echo json_encode($rspta);
		break;
	
}
?>
