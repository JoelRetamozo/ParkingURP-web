<?php

require_once "../modelos/M_Persona_X_Vehiculo.php";

$m_persona_x_vehiculo = new M_Persona_X_Vehiculo();

$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$id_vehiculo = isset($_POST["id_vehiculo"])? limpiarCadena($_POST["id_vehiculo"]):"";

switch ($_GET["op"]) {
	case 'guardar':
		$rspta = $m_persona_x_vehiculo->insertar($id_persona, $id_vehiculo);
		echo $rspta ? "Vehiculo registrado a Persona" : "Vehiculo no se pudo registrar a Persona";
		
		break;
}

?>