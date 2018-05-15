<?php

require_once "../modelos/M_WS_Vehiculo.php";

$placa = isset($_REQUEST["placa"])? limpiarCadena($_REQUEST["placa"]):"";

$m_ws_vehiculo = new M_WS_Vehiculo();

switch ($_GET["op"]) {
	case 'mostrarVehiculo':
		$rspta = $m_ws_vehiculo->mostrarVehiculo($placa);
		//Codificar el resultado utilizando json
			echo json_encode($rspta);
		break;
}


?>