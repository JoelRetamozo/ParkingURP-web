<?php
require_once "../modelos/M_Usuario.php";
$m_usuario = new M_Usuario();
$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$correo = isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";

switch ($_GET["op"]) {
	case 'guardar':
	$id_persona_new = $_GET["id_persona_new"];
		$rspta = $m_usuario->insertar($codigo, $correo, $id_persona_new);
		echo $rspta ? "Usuario registrado de Persona" : "Usuario no se pudo registrar a Persona";
		break;
	
}
?>