<?php

//Iniiar la sesion de archivo
session_start();

require_once "../modelos/M_Usuario.php";
$m_usuario = new M_Usuario();
$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$password = isset($_POST["password"])? limpiarCadena($_POST["password"]):"";
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

	case 'verificar':

		$rspta = $m_usuario->verificar($codigo, $password);

		//Como me esta devolviendo los valores de cada uno de los campos de ese usuario
		$fetch = $rspta->fetch_object();

		if(isset($fetch)){
			//Declaramos las variables de sesion
			$_SESSION['nombre']=$fetch->nombre;
			$_SESSION['ape_paterno']=$fetch->ape_paterno;
			$_SESSION['ape_materno']=$fetch->ape_materno;
			$_SESSION['codigo']=$fetch->codigo;
			$_SESSION['perfil']=$fetch->perfil;
		}

		echo json_encode($fetch);
	break;

	case 'salir':
	//Limpiamos las variables de sesion
	session_unset();

	//Destruimos la sesion
	session_destroy();

	//Redireccionar al index.php
	header("Location: ../../index.php");

	break;
	
}
?>