<?php
require_once "../modelos/M_Control.php";
$m_control = new M_Control();
$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$flag_quedarse = isset($_POST["flag_quedarse"])? limpiarCadena($_POST["flag_quedarse"]):"";
$motivo = isset($_POST["motivo"])? limpiarCadena($_POST["motivo"]):"";

switch ($_GET["op"]) {
	case 'guardar':

		//$id_control = $m_control->insertar($flag_quedarse, $motivo, $id_persona);
		$id_control = $m_control->insertar('0', null, $id_persona);

		require_once "../modelos/M_Invitado.php";
		$m_invitado = new M_Invitado();

		require_once "../modelos/M_Invitado_X_Control.php";
		$m_invitado_x_control = new M_Invitado_X_Control();

		if(isset($_POST['invitados'])){

			$dni_invitados = $_POST['invitados'];
			foreach($dni_invitados as $dni){
				$id_invitado = $m_invitado->insertar($dni);

				$rspta = $m_invitado_x_control->insertar($id_invitado, $id_control);
			}

		}
		break;
	
}
?>