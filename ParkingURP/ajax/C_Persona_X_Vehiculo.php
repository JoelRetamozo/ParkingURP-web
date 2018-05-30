<?php

require_once "../modelos/M_Persona_X_Vehiculo.php";

$m_persona_x_vehiculo = new M_Persona_X_Vehiculo();

$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$placa = isset($_POST["placa"])? limpiarCadena($_POST["placa"]):"";

switch ($_GET["op"]) {
	case 'guardar':
		$rspta = $m_persona_x_vehiculo->insertar($codigo, $placa);
		echo $rspta ? "Vehiculo registrado a Persona" : "Vehiculo no se pudo registrar a Persona";
		
		break;
}

?>