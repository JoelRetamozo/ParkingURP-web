<?php
require_once "../modelos/M_Control.php";
$m_control = new M_Control();
$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$flag_quedarse = isset($_POST["flag_quedarse"])? limpiarCadena($_POST["flag_quedarse"]):"";
$motivo = isset($_POST["motivo"])? limpiarCadena($_POST["motivo"]):"";

switch ($_GET["op"]) {
	case 'guardar':

		//$id_control = $m_control->insertar($flag_quedarse, $motivo, $id_persona);
		$id_control = $m_control->insertar('0', null, $codigo);

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

		if(isset($_POST['invitados'])){

			$dni_invitados = $_POST['invitados'];
			foreach($dni_invitados as $dni){
				$rspta2 = $m_invitado->insertar($dni);

				$rspta = $m_invitado_x_control->insertar($dni, $id_control);
			}

		}
		break;
}
?>