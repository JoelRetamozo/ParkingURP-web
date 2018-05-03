<?php
require_once "../modelos/M_Usuario.php";
$m_usuario = new M_Usuario();
$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$correo = isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";

switch ($_GET["op"]) {
	case 'guardar':
	$id_persona_new = $_GET["id_persona_new"];
		$rspta = $m_usuario->insertar($codigo, $correo, $id_persona_new);
		echo $rspta ? "Usuario registrado de Persona" : "Usuario no se pudo registrar a Persona";
		break;

	case 'activar':
		$rspta = $m_usuario->activar($id_persona);
			echo $rspta ? "Conductor activado" : "Conductor no se pudo activar";
		break;

	case 'desactivar':
		$rspta = $m_usuario->desactivar($id_persona);
			echo $rspta ? "Conductor desactivado" : "Conductor no se pudo desactivar";
		break;
	
}
?>